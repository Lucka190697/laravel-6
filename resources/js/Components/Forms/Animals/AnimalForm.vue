<template>
  <div style="padding: 0">
    <div class="col-md-6 float-left" style="z-index: 100 !important">

      <div class="form-group">
        <label for="code" class="float-left">Código: </label>
        <div class="input-group" :class="hasErrors('code')">
          <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-bar-code"></i>
          </span>
          </div>
          <input
              type="number"
              name="code"
              class="form-control"
              id="code"
              placeholder="Código de Identificação"
              v-model="code">
        </div>
        <small
            class="badge badge-danger text-danger float-right mt-2"
            v-if="hasErrors('code')">
          Código válido com no máximo 255 caracteres
        </small>
      </div>

      <div class="form-group">
        <label for="name" class="float-left">Nome: </label>
        <div class="input-group" :class="hasErrors('name')">
          <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-user"></i>
          </span>
          </div>
          <input
              type="text"
              name="name"
              class="form-control"
              id="name"
              placeholder="Nome do usuário"
              v-model="name">
        </div>
        <small
            class="badge badge-danger text-danger float-right mt-2"
            v-if="hasErrors('name')">
          Nome válido entre 5 e 255 caracteres
        </small>
      </div>

      <div class="form-group">
        <label for="born_date" class="float-left">Data de Nascimento:</label>
        <div class="input-group" :class="hasErrors('born_date')">
          <div class="input-group-prepend">
          <span class="input-group-text" id="">
            <i class="fa fa-calendar"></i>
          </span>
          </div>
          <input
              type="date"
              name="born_date"
              class="form-control"
              id="born_date"
              placeholder="Data de nascimento do animal"
              v-model="bornDate">
        </div>
        <small
            class="badge badge-danger text-danger float-right mt-2"
            v-if="hasErrors('born_date')">
          Data inválida!
        </small>
      </div>

      <div class="form-group">
        <label for="sex" class="float-left">Sexo: </label>
        <div class="input-group" :class="hasErrors('sex')">
          <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-male-femeale"></i>
          </span>
          </div>
          <input
              type="radio"
              name="sex"
              v-model="sex"
              id="sex"
              required
              class="text-dark form-control"
              :class="hasErrors('sex')">
        </div>
        <small
            class="badge badge-danger text-danger float-right mt-2"
            v-if="hasErrors('sex')">
          Número de telefone válido!
        </small>
      </div>
    </div>

    <div class="col-md-6 float-right">

      <div class="form-group">
        <label for="userPassword" class="float-left">Senha</label>
        <div class="input-group" :class="hasErrors('password')">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">
            <i class="ni ni-lock-circle-open"></i>
          </span>
          </div>
          <input
              type="password"
              name="password"
              class="form-control"
              id="userPassword"
              placeholder="Use no mínimo 8 caracteres"
              v-model="password">
        </div>
        <small
            class="badge badge-danger text-danger float-right mb-5"
            v-if="hasErrors('password')">
          8 caracteres, letras maúsculas e minúsculas, números e símbolos
        </small>
      </div>

      <div class="form-group">
        <label for="confirmPassword" class="float-left">Repita a senha para confirmar</label>
        <div class="input-group" :class="hasErrors('password_confirmation')">
          <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">
            <i class="ni ni-lock-circle-open"></i>
          </span>
          </div>
          <input
              type="password"
              name="password_confirmation"
              class="form-control"
              id="confirmPassword"
              placeholder="Ambas devem ser iguais"
              v-model="confirmPassword">
        </div>
        <small
            class="badge badge-danger text-danger float-right mt-2"
            v-if="hasErrors('password_confirmation')">
          A senhas senhas devem ser idênticas
        </small>
      </div>

      <div class="form-group">
        <label for="thumbnail" class="float-left">Imagem de perfil</label>
        <div class="input-group" :class="hasErrors('thumbnail')">
          <div class="input-group">
            <input
                type="file"
                name="thumbnail"
                class="form-control"
                id="thumbnail">
            <label class="custom-file-label" for="thumbnail">
              {{ thumbnail ? thumbnail.name : "Nenhuma imagem" }}
            </label>
          </div>
        </div>
        <small
            class="badge badge-danger text-danger float-right mt-2"
            v-if="hasErrors('thumbnail')">
          Escolha um arquivo de imagem válido no formato jpg, jpeg, gif ou png
        </small>
      </div>
    </div>
    <!--    <div class="custom-file">-->
    <!--      <vue-dropzone ref="myVueDropzone" id="dropzone" v-model="thumbnail" :options="dropzoneOptions"></vue-dropzone>-->
    <!--    </div>-->
  </div>
</template>

<script>
export default {
  name: "AnimalForm",

  props: {
    old: {
      type: Array,
      required: false,
    },
    errors: {
      required: false,
    },
    data: {
      required: false,
    }
  },

  data() {
    return {
      code: '',
      name: '',
      bornDate: '',
      ageClassification: undefined,
      sex: undefined,
      productionClassification: undefined,
      breed: '',
      thumbnail: '',
      mother_id: '',
      farm_id: '',
      responsible_id: '',
    }
  }
}
</script>

<style scoped>

</style>