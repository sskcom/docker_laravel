
<template>
    <div></div>
  </template>
  
  <script>
  export default {
    created() {
      this.hello();
    },
    methods: {
      async hello() {
        const res = await axios.get("/api/hello");
        console.log(res);
      },
    },
  };
  </script>