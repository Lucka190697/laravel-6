(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: "AnimalForm",
  props: {
    old: {
      type: Array,
      required: false
    },
    errors: {
      required: false
    },
    data: {
      required: false
    }
  },
  data: function data() {
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
      responsible_id: ''
    };
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true&":
/*!***************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true& ***!
  \***************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticStyle: { padding: "0" } }, [
    _c(
      "div",
      {
        staticClass: "col-md-6 float-left",
        staticStyle: { "z-index": "100 !important" }
      },
      [
        _c("div", { staticClass: "form-group" }, [
          _c("label", { staticClass: "float-left", attrs: { for: "code" } }, [
            _vm._v("Código: ")
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "input-group", class: _vm.hasErrors("code") },
            [
              _vm._m(0),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.code,
                    expression: "code"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "number",
                  name: "code",
                  id: "code",
                  placeholder: "Código de Identificação"
                },
                domProps: { value: _vm.code },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.code = $event.target.value
                  }
                }
              })
            ]
          ),
          _vm._v(" "),
          _vm.hasErrors("code")
            ? _c(
                "small",
                {
                  staticClass: "badge badge-danger text-danger float-right mt-2"
                },
                [
                  _vm._v(
                    "\n        Código válido com no máximo 255 caracteres\n      "
                  )
                ]
              )
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "form-group" }, [
          _c("label", { staticClass: "float-left", attrs: { for: "name" } }, [
            _vm._v("Nome: ")
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "input-group", class: _vm.hasErrors("name") },
            [
              _vm._m(1),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.name,
                    expression: "name"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "text",
                  name: "name",
                  id: "name",
                  placeholder: "Nome do usuário"
                },
                domProps: { value: _vm.name },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.name = $event.target.value
                  }
                }
              })
            ]
          ),
          _vm._v(" "),
          _vm.hasErrors("name")
            ? _c(
                "small",
                {
                  staticClass: "badge badge-danger text-danger float-right mt-2"
                },
                [
                  _vm._v(
                    "\n        Nome válido entre 5 e 255 caracteres\n      "
                  )
                ]
              )
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "form-group" }, [
          _c(
            "label",
            { staticClass: "float-left", attrs: { for: "born_date" } },
            [_vm._v("Data de Nascimento:")]
          ),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "input-group", class: _vm.hasErrors("born_date") },
            [
              _vm._m(2),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.bornDate,
                    expression: "bornDate"
                  }
                ],
                staticClass: "form-control",
                attrs: {
                  type: "date",
                  name: "born_date",
                  id: "born_date",
                  placeholder: "Data de nascimento do animal"
                },
                domProps: { value: _vm.bornDate },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.bornDate = $event.target.value
                  }
                }
              })
            ]
          ),
          _vm._v(" "),
          _vm.hasErrors("born_date")
            ? _c(
                "small",
                {
                  staticClass: "badge badge-danger text-danger float-right mt-2"
                },
                [_vm._v("\n        Data inválida!\n      ")]
              )
            : _vm._e()
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "form-group" }, [
          _c("label", { staticClass: "float-left", attrs: { for: "sex" } }, [
            _vm._v("Sexo: ")
          ]),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "input-group", class: _vm.hasErrors("sex") },
            [
              _vm._m(3),
              _vm._v(" "),
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.sex,
                    expression: "sex"
                  }
                ],
                staticClass: "text-dark form-control",
                class: _vm.hasErrors("sex"),
                attrs: { type: "radio", name: "sex", id: "sex", required: "" },
                domProps: { checked: _vm._q(_vm.sex, null) },
                on: {
                  change: function($event) {
                    _vm.sex = null
                  }
                }
              })
            ]
          ),
          _vm._v(" "),
          _vm.hasErrors("sex")
            ? _c(
                "small",
                {
                  staticClass: "badge badge-danger text-danger float-right mt-2"
                },
                [_vm._v("\n        Número de telefone válido!\n      ")]
              )
            : _vm._e()
        ])
      ]
    ),
    _vm._v(" "),
    _c("div", { staticClass: "col-md-6 float-right" }, [
      _c("div", { staticClass: "form-group" }, [
        _c(
          "label",
          { staticClass: "float-left", attrs: { for: "userPassword" } },
          [_vm._v("Senha")]
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "input-group", class: _vm.hasErrors("password") },
          [
            _vm._m(4),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.password,
                  expression: "password"
                }
              ],
              staticClass: "form-control",
              attrs: {
                type: "password",
                name: "password",
                id: "userPassword",
                placeholder: "Use no mínimo 8 caracteres"
              },
              domProps: { value: _vm.password },
              on: {
                input: function($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.password = $event.target.value
                }
              }
            })
          ]
        ),
        _vm._v(" "),
        _vm.hasErrors("password")
          ? _c(
              "small",
              {
                staticClass: "badge badge-danger text-danger float-right mb-5"
              },
              [
                _vm._v(
                  "\n        8 caracteres, letras maúsculas e minúsculas, números e símbolos\n      "
                )
              ]
            )
          : _vm._e()
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "form-group" }, [
        _c(
          "label",
          { staticClass: "float-left", attrs: { for: "confirmPassword" } },
          [_vm._v("Repita a senha para confirmar")]
        ),
        _vm._v(" "),
        _c(
          "div",
          {
            staticClass: "input-group",
            class: _vm.hasErrors("password_confirmation")
          },
          [
            _vm._m(5),
            _vm._v(" "),
            _c("input", {
              directives: [
                {
                  name: "model",
                  rawName: "v-model",
                  value: _vm.confirmPassword,
                  expression: "confirmPassword"
                }
              ],
              staticClass: "form-control",
              attrs: {
                type: "password",
                name: "password_confirmation",
                id: "confirmPassword",
                placeholder: "Ambas devem ser iguais"
              },
              domProps: { value: _vm.confirmPassword },
              on: {
                input: function($event) {
                  if ($event.target.composing) {
                    return
                  }
                  _vm.confirmPassword = $event.target.value
                }
              }
            })
          ]
        ),
        _vm._v(" "),
        _vm.hasErrors("password_confirmation")
          ? _c(
              "small",
              {
                staticClass: "badge badge-danger text-danger float-right mt-2"
              },
              [_vm._v("\n        A senhas senhas devem ser idênticas\n      ")]
            )
          : _vm._e()
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "form-group" }, [
        _c(
          "label",
          { staticClass: "float-left", attrs: { for: "thumbnail" } },
          [_vm._v("Imagem de perfil")]
        ),
        _vm._v(" "),
        _c(
          "div",
          { staticClass: "input-group", class: _vm.hasErrors("thumbnail") },
          [
            _c("div", { staticClass: "input-group" }, [
              _c("input", {
                staticClass: "form-control",
                attrs: { type: "file", name: "thumbnail", id: "thumbnail" }
              }),
              _vm._v(" "),
              _c(
                "label",
                {
                  staticClass: "custom-file-label",
                  attrs: { for: "thumbnail" }
                },
                [
                  _vm._v(
                    "\n            " +
                      _vm._s(
                        _vm.thumbnail ? _vm.thumbnail.name : "Nenhuma imagem"
                      ) +
                      "\n          "
                  )
                ]
              )
            ])
          ]
        ),
        _vm._v(" "),
        _vm.hasErrors("thumbnail")
          ? _c(
              "small",
              {
                staticClass: "badge badge-danger text-danger float-right mt-2"
              },
              [
                _vm._v(
                  "\n        Escolha um arquivo de imagem válido no formato jpg, jpeg, gif ou png\n      "
                )
              ]
            )
          : _vm._e()
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c("span", { staticClass: "input-group-text" }, [
        _c("i", { staticClass: "fa fa-bar-code" })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c("span", { staticClass: "input-group-text" }, [
        _c("i", { staticClass: "fa fa-user" })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c("span", { staticClass: "input-group-text", attrs: { id: "" } }, [
        _c("i", { staticClass: "fa fa-calendar" })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c("span", { staticClass: "input-group-text" }, [
        _c("i", { staticClass: "fa fa-male-femeale" })
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c(
        "span",
        { staticClass: "input-group-text", attrs: { id: "basic-addon1" } },
        [_c("i", { staticClass: "ni ni-lock-circle-open" })]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "input-group-prepend" }, [
      _c(
        "span",
        { staticClass: "input-group-text", attrs: { id: "basic-addon1" } },
        [_c("i", { staticClass: "ni ni-lock-circle-open" })]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/Components/Forms/Animals/AnimalForm.vue":
/*!**************************************************************!*\
  !*** ./resources/js/Components/Forms/Animals/AnimalForm.vue ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _AnimalForm_vue_vue_type_template_id_56bf153a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true& */ "./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true&");
/* harmony import */ var _AnimalForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AnimalForm.vue?vue&type=script&lang=js& */ "./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _AnimalForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _AnimalForm_vue_vue_type_template_id_56bf153a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _AnimalForm_vue_vue_type_template_id_56bf153a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "56bf153a",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Components/Forms/Animals/AnimalForm.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=script&lang=js&":
/*!***************************************************************************************!*\
  !*** ./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AnimalForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib??ref--4-0!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AnimalForm.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_AnimalForm_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true&":
/*!*********************************************************************************************************!*\
  !*** ./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true& ***!
  \*********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AnimalForm_vue_vue_type_template_id_56bf153a_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib??vue-loader-options!./AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Components/Forms/Animals/AnimalForm.vue?vue&type=template&id=56bf153a&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AnimalForm_vue_vue_type_template_id_56bf153a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AnimalForm_vue_vue_type_template_id_56bf153a_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);