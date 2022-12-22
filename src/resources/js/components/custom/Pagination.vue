<script lang="ts" setup>
type PaginationLink = {
    url: string | null
    label: string
    active: boolean
}

type Props = {
    links: PaginationLink[]
    onClickLink: (url: string) => void
}

const { links, onClickLink } = defineProps<Props>()
</script>

<template>
    <div class="pagination">
        <template v-for="link in links">
            <button :disabled="link.url === null" class="pagination-link" :class="{
                'pagination-link-enabled': link.url !== null,
                'pagination-link-active': link.active,
            }" @click="onClickLink(link.url)">
                {{ link.label }}
            </button>
        </template>
    </div>
</template>