import React, { Component } from 'react'

export default class TestingProps extends Component {
  
    render() {
        const {nama, gantiNama} =this.props
        return (
            <div>
                <h5>Testing ganti nama : {nama}</h5>
                <button onClick={()=>gantiNama("Santriono S besar")}> Ganti Nama</button>
            </div>
        )
    }
}
