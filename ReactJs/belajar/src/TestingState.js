import React, { Component } from 'react'
import TestingProps from './TestingProps'

export default class TestingState extends Component {
 constructor(props) {
     super(props)
 
     this.state = ({
          nama: "Refki"
     })
 }

gantiNama = (nama_baru) => {
    this.setState({
        nama : nama_baru
    })
}

    render() {
        return (
            <div>
               <h2>{this.state.nama} </h2> 
               <button onClick={() => this.gantiNama("santriono s kecil")}> Ganti Nama</button>
               <TestingProps nama={this.state.nama} gantiNama={this.gantiNama}/>
            </div>
        )
    }
}
