import Register from './components/Register';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import AddTodos from './components/admin/AddTodos'
import EditTodos from './components/admin/EditTodos'

export default{
    mode: 'history',
    linkActiveClass: 'font-semibold',
    routes: [
      
        {
            path: '/',
            component: Login,
            name: "Login"
        },
        {
            path: '/register',
            component: Register
        },

        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
           beforeEnter: (to, form, next) =>{
               axios.get('/api/athenticated').then(()=>{
                   next()
               }).catch(()=>{
                   return next({ name: 'Login'})
               })
           }
       
        },

        {
            path:'/addTodos',
            component: AddTodos,
            props: true,
            name: 'addTodos',
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
        },

        {
            path:'/editTodos',
            component: EditTodos,
            props: true,
            name: 'EditTodos',
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
        },

       
    ]
}