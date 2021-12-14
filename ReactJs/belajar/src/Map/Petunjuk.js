import React, { Component } from 'react'
import axios from 'axios'



const api = axios.create ({
  baseURL : `http://127.0.0.1:8000/api/soal/petunjuk`

})

export default class Petunjuk extends Component {

  state ={
    petunjuk: []
  }

  constructor() {
    super()
    api.get('/').then (res => {
      console.log(res.data)
      this.setState({ petunjuk: res.data })
    })

  }

  render() {
     return (
      <>
        <h2>Map untuk Petunjuk Soal</h2>
        <ul>
            {this.state.petunjuk.map(dt => 
              <li key={dt.id_petunjuk}>{dt.isi_petunjuk}</li>
            )}
         </ul>     
      </>

    )
  }
}




