import { combineReducers } from "redux";

const initialState = {
  username: 'Refki',
}

const initialRegister = {

  form: {
    username: '',
    email: '',
    password: '',
    confirmPassword: '',

  },
  title: 'Ayo bergabung bersama kami',
  subtitle: 'Silahkan isi data anda dengan benar'
}
const initialLogin = {
  title: 'Selamat Datang Kembali',
  subtitle: 'Silahkan login untuk melanjutkan'
}

const registerReducer = (state = initialRegister, action) => {
  switch (action.type) {
    case 'SET_TITLE':
      return {
        ...state,
        title:'ganti title'
      }
      break;
    case 'SET_FORM':
      return {
        ...state,
        form :{
          ...state.form,
          [action.inputType]: action.inputValue,
        }
      }
      break;
  
    default:
      break;
  }
  return state;
}
const loginReducer = (state = initialLogin, action) => {
  return state;
}
 const reducer = combineReducers({ registerReducer, loginReducer })

 export default reducer