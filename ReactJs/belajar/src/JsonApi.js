import React, { Component } from 'react'
import { Table } from 'react-bootstrap'

export default class JsonApi extends Component {
    constructor(props) {
        super(props)

        this.state = {
            data: []
        }
    }

    componentDidMount() {
        fetch('http://127.0.0.1:8000/api/soal/kognitif')
            .then(response => response.json())
            .then(json => {
                this.setState({
                    data: json
                })

            })
    }

    render() {
        return (
            <div class="container">
                <Table striped bordered hover size="sm" className="mt-3">
                    <thead>
                        <tr>
                            <td>Nomor</td>
                            <td>Bidang</td>
                            <td>Urutan</td>
                            <td>Petunjuk</td>
                            <td>Pertanyaan</td>
                            <td>Gambar</td>
                        </tr>
                    </thead>
                    <tbody>
                        {this.state.data.map((dt, index) => (
                            <tr>
                                <td>{index + 1}</td>
                                <td>{dt.bidang.replace("_", " ")}</td>
                                <td>{dt.urutan}</td>
                                <td>{dt.isi_petunjuk}</td>
                                <td>{dt.pertanyaan}</td>
                                   <td>{dt.pertanyaan_gambar !== "" ? 
                             
                                <img className="img-fluid" src={"http://127.0.0.1:8000/gambar/"+dt.pertanyaan_gambar } /> : <span></span> } </td>
                           
                                
                                
                            </tr>
                        ))}
                    </tbody>
                </Table>
            </div>
        )
    }
}
