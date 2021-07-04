<template>
<div class="header pb-7 pt-2 pt-lg-7 align-items-center procriare-header"
     :style="'background-image: url(' + backgroundImg + ')'">
  <span class="mask bg-gradient-dark opacity-3"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-md-12 {customClass}">
        <h3 class="display-2 text-white"> {{ title }} </h3>
        <div v-if="description">
          <p class="text-white mt-0 mb-5">
            {{ description }}
          </p>
        </div>
        <div v-if="breadcrumbHeader">
          <p class="text-white mt-0 mb-5">
            <breadcrumb :header="breadcrumbHeader" icon="fa fa-user-alt">
              <breadcrumb-item href="/home">
                <span class="text-white">
                  <i class="mr-1 fa fa-home"></i>
                  {{ breadcrumbLabel }}
                </span>
              </breadcrumb-item>
            </breadcrumb>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
  name: "layout-header",

  props: {
    backgroundImg: {
      String,
      required: false,
    },

    customClass: {
      String,
      required: false,
    },

    title: {
      String,
      required: false,
    },

    breadcrumbHeader: {
      String,
      required: true,
    },

    breadcrumbLabel: {
      String,
      required: true,
    },
    description: {
      String,
      required: false,
    },
  }
}
</script>

<style scoped>
.procriare-header {
  background-size: 100% !important;
  background-position: center;
  background-repeat: no-repeat;
  position: fixed !important;
  height: 100%;
  width: 100%;
  z-index: -2;
}

@media (max-width: 280px) {
  .procriare-header {
    background-size: 100%;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 0;
    height: 100%;
    /*position: fixed !important;*/
  }
}
</style>
