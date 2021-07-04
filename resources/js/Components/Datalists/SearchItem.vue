<template>
  <div class="p-0">
    <form action="#" method="post" role="search">
      <div class="input-group">
        <filter-text
            url-key="query"
            class="col-12 form-control"
            placeholder="Pesquisar...">
        </filter-text>
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "SearchItem"
}
</script>

<style scoped>

</style>