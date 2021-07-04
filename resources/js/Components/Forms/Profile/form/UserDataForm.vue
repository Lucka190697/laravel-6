<template>
  <div class="pl-lg-4">

    <div class="pl-lg-4">
      <div class="form-group" :class="hasErrors('name')">
        <label class="form-control-label" for="input-name">Nome</label>
        <input
          type="text"
          name="name"
          id="input-name"
          class="form-control form-control-alternative"
          :class="hasErrors('name')"
          placeholder="Name"
          v-model="name"
          required
          autofocus>

        <span
          v-if="errors['name']"
          class="invalid-feedback"
          role="alert">
          <strong>{{ errors['name'] }}</strong>
        </span>
      </div>
      <div class="form-group" :class="hasErrors('email')">
        <label class="form-control-label" for="input-email">email</label>
        <input
          type="email"
          name="email"
          id="input-email"
          class="form-control form-control-alternative"
          :class="hasErrors('email')"
          placeholder="email"
          v-model="email"
          required>

        <span
          v-if="errors['email']"
          class="invalid-feedback"
          role="alert">
          <strong>{{ errors['email'] }}</strong>
        </span>
      </div>

      <div class="form-group" :class="hasErrors('phone')">
        <label class="form-control-label" for="input-phone">Telefone</label>
        <input
          type="text"
          name="phone"
          id="input-phone"
          class="form-control form-control-alternative"
          :class="hasErrors('phone')"
          placeholder="Telefone"
          v-mask="'(##) ####-####'"
          v-model="phone"
          required>

        <span
          v-if="errors['phone']"
          class="invalid-feedback"
          role="alert">
          <strong>{{ errors['phone'] }}</strong>
        </span>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-success mt-4">
          <i class="fa fa-save mr-2"></i> Salvar
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "UserDataForm",
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
  created() {
    this.setFormData();
  },
  data() {
    return {
      name: undefined,
      email: undefined,
      phone: undefined,
    }
  },
  methods: {
    setFormData() {
      if (this.data) {
        this.name = this.data.name;
        this.email = this.data.email;
        this.phone = this.data.phone;
      }else if (this.old) {
        this.name = this.old.name;
        this.email = this.old.email;
        this.phone = this.old.phone;
      }
    },

    hasErrors(field) {
      return this.errors[field] ? 'text-danger border border-danger' : '';
    },
  }
}
</script>

<style scoped>

</style>