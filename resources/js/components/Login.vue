<template>
<div>
 
    <section class="h-screen">
  <div class="px-6 h-full text-gray-800">
    <div
      class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
    >
      <div
        class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
      >
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="w-full"
          alt="Sample image"
        />
      </div>
      <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
        <form>
          
          <!-- Email input -->
          <div class="mb-6">
            <input
              type="text"
              v-model="form.email"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              label="email"
              placeholder="Email address"
            />
          </div>

          <!-- Password input -->
          <div class="mb-6">
            <input
              type="password"
              v-model="form.password"
              label="password"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Password"
            />
          </div>

          <div class="text-center lg:text-left">
            <button
             @click.prevent="loginUser"
              type="button"
              class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >Login </button>

            <br>
            <br>
            <p>Please <a href="/register" class="underline-offset-4 text-blue-500">Register</a> the account before you can enter</p>
           
          
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</div>
</template>
<script>

import EventBus from '../eventBus';

export default {
    data(){
        return{
            form:{
                email: '',
                password: '',
                admin: false
            },
            errors: []
        }
    },
    methods:{
         loginUser(){
             axios.post('/api/login', this.form).then(() =>{
                //  EventBus.$emit('authCheck')
                //  this.$router.push({ name: "Index"}); 
                axios.get('/api/user').then((res)=>{
            this.user = res.data
            if(this.user.role == 'admin') {
                EventBus.$emit('authCheck')
                this.$router.push({ name: "Dashboard"})
            }else{
                EventBus.$emit('authCheck')
                this.$router.push({ name: "UserDash"})
            }
            })
             }).catch((error) =>{
         this.errors = error.response.data.errors;
            })
         }
    }
}
</script>