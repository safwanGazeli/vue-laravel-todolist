import Register from './components/Register';
import Login from './components/Login';
import Dashboard from './components/Dashboard';
import UserDash from './components/userDash';
import AddTodos from './components/admin/AddTodos'
import EditTodos from './components/admin/EditTodos'
import AddCTodos from './components/client/AddCTodos'
import editCTodos from './components/client/EditCTodos'

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
            path: "/userDashboard",
            name: "UserDash",
            component: UserDash,
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
            beforeEnter: (to, form, next) =>{
                axios.get('/api/athenticated').then(()=>{
                    next()
                }).catch(()=>{
                    return next({ name: 'Login'})
                })
            }
        },

        {
            path:'/addCTodos',
            component: AddCTodos,
            props: true,
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

        {
            path:'/editCTodos',
            component: editCTodos,
            props: true,
            name: 'editCTodos',
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