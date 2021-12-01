$(document).ready(function() {
    function cariFilm() {
        $('#list').html('')
        $.ajax({
            url: 'http://www.omdbapi.com',
            type: 'GET',
            dataType: 'json',
            data: {
                apikey: 'a2ceb3a2',
                s: $('#key').val()
            },
            success: function(result) {
                if (result.Response === 'True') {
                    let film = result.Search
                    $.each(film, function(index, data) {
                        $('#list').append(`
                        <div class="col-sm-3 text-center mt-2">
                            <div class="card">
                                <div class="card-header">
                                ${data.Title}
                                </div>
                                <div class="card-body">
                                    <img src="${data.Poster}" width="100%">
                                    <p><strong class="badge badge-warning">${data.Type}</strong></p> 
                                    <p class="card-text" >${data.Year}</p> 
                                    <a href="#" class="btn btn-info btn-sm detail-film"
                                    data-toggle="modal" 
                                    data-target="#detailFilm" 
                                    data-id="${data.imdbID}" >Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        `)
                    })
                } else {
                    $('#list').html(`<p class="alert alert-danger">${result.Error}</p>`)
                }
            }
        })
    }
    $('#cari').click(function() {
        cariFilm()
    })
    $('#key').on('keyup', function(e) {
        if (e.which === 13) {
            cariFilm()
        }
    })
    $('#list').on('click', '.detail-film', function() {
        let filmId = $(this).data('id')
        $.ajax({
            url: 'http://www.omdbapi.com',
            type: 'GET',
            dataType: 'json',
            data: {
                apikey: 'a2ceb3a2',
                i: filmId
            },
            success: function(film) {
                console.log(film)
                if (film.Response === 'True') {
                    $('.modal-body').html(`
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="${film.Poster}" class="img-fluid img-thumbnail" >
                        </div>
                        <div class="col-sm-7">
                            <h3>${film.Title}</h3>
                            <p>${film.Plot}</p>
                        </div>                                       
                    </div>
                    `)
                }
            }
        })
    })
})