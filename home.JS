$(document).ready(function() {
    // Using .click() method
    $('#add').click(function() {
        let link = $('#link').val();
        let jenis = $('#jenis').val();
        let desk = $('#desk').val();
        let judul = $('#judul').val();
        let gambar = $('#gambar').val();
        let headerContent = `
            <div class="column">
                <div class="ui card">
                    <a class="image" href="isi_materi.php?link=https://www.youtube.com/embed`+link+`&desk=`+desk+`">
                      <img src="`+gambar+`" style="width: 100%;height: 230px;">
                    </a>
                    <div class="content">
                      <a class="header" href="isi_materi.php?link=https://www.youtube.com/embed/`+link+`&desk=`+desk+`">`+judul+`</a>
                      <div class="meta">2021-03-08</div>
                      <div class="description">
                        <p>from:<strong>marcel</strong></p>
                      </div>
                    </div>
                    <div class="extra content">
                      <i class="fas fa-chalkboard-teacher"></i> &nbsp;&nbsp;&nbsp;Mulai Belajar
                    </div>
                  </div>
            </div>`;
    $('#'+jenis).append(headerContent);
});
});
function tambah(){
    
}