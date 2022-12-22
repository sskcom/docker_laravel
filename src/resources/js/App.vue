
<template>
 
  <div>
    <v-pagination v-model="page" :length=10></v-pagination>
  </div>
</template>




<script>


import { ref } from 'vue'
import { useRoute, onBeforeRouteUpdate } from 'vue-router'
import axios from 'axios'




async function getAPI (offset, perpage) {
  const res = await axios.get("/api/hello", {
    params: {
      offset: offset,
      perpage: perpage
    }
  })
  return res.data
}

export default {
  name: 'Articles',
  setup() {
    const route = useRoute();
    const perpage = 10;
    let page = ref(0);
    let offset = 5;
    let list = ref([]);


    console.log(route);

    if (null!=route && route.query) {
      page.value = (route.query.page) ? parseInt(route.query.page) : 1;
    } else {
      page.value = 1;
    }

    const setOffset = () => {

      console.log("page.value:"+page.value);
      console.log("perpage:"+perpage);
      offset = (page.value > 0) ? (page.value - 1) * perpage : 0;

    }

    const load = async () => {
      try {
        console.log(offset);
        list.value = await getAPI(offset, perpage);
        console.log(list.value);
      } catch (error) {
        console.error(error) // catch any errors that may occur in getAPI
      }
    }
    
    setOffset()
    load()

    onBeforeRouteUpdate(async (to, from) => {
      if (to.query.page !== from.query.page) {
        page.value = to.query.page;
        setOffset()
        load()
      }
    })

    return {
      perpage,
      page,
      list
    }
  },
  
}



</script>