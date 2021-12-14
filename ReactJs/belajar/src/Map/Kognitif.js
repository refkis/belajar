import React, { Component } from 'react'
import axios from 'axios'



const api = axios.create ({
  baseURL : `http://127.0.0.1:8000/api/soal/kognitif`

})

export default class Kognitif extends Component {

  state ={
    kognitif: []
  }

  constructor() {
    super()
    api.get('/').then (res => {
      console.log(res.data)
      this.setState({ kognitif: res.data })
    })

  }

  render() {
     return (
      <>
        <h2>Map untuk kognitif Soal</h2>
        <ul>
            {this.state.kognitif.map(dt => 
              <li key={dt.id_soal}>{dt.bidang.replace("_", " ")}</li>
            )}
         </ul>     
      </>

    )
  }
}




