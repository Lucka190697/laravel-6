/* Data list filters */
// require('./DataListFilters');

/* Data lists */
Vue.component('data-list', require('./Datalists/MainDatalist.vue').default);

/* Breadcrumb */
Vue.component('breadcrumb', require('./Breadcrumb.vue').default);
Vue.component('breadcrumb-item', require('./BreadcrumbItem.vue').default);

/* Auxiliary */
Vue.component('select-box', require('./SelectBox.vue').default);
Vue.component('confirmable', require('./Confirmable.vue').default);
Vue.component('delete-button', require('./DeleteButton').default);
Vue.component('input-phone', require('./inputPhone').default);

/*LAYOUTS*/
Vue.component('layout-header', require('./Layouts/layoutHeader').default);

/* Forms */
Vue.component('register-form', require('./Forms/Auth/RegisterForm').default);

Vue.component('farm-form', require('./Forms/FarmForm').default);
Vue.component('user-form', require('./Forms/Users/UsersForm').default);

/*Profile Forms*/
Vue.component('user-data-form', require('./Forms/Profile/form/UserDataForm').default);
Vue.component('user-password-form', require('./Forms/Profile/form/UserPasswordForm').default);
Vue.component('user-thumbnail-form', require('./Forms/Profile/form/UserThumbnailForm').default);
Vue.component('image-profile-upload', require('./Forms/Profile/form/uploadImage/ImageProfileUploadModal').default);

/*Animal*/
Vue.component('animal-form', () => import('./Forms/Animals/AnimalForm').default);


/*Extras*/
Vue.component('validate-password', require('./Forms/extras/ValidatePassword').default);
Vue.component('editor-area', require('./editor/EditorArea').default);
Vue.component('j-area-editor', require('./editor/jquery-editor/j-area-editor').default);

/* Main */
const app = new Vue(require('./App.vue').default);
