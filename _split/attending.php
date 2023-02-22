<div id="fh5co-started" class="fh5co-bg" style="background-image:url(assets/images/DSCF7843.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan restu kepada kami.</p>
                <p>Kami yang berbahagia,</p>
                <h2>Eko & Ratih</h2>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <form method="POST" action="">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="name" class="sr-only">Nama</label>
                            <input type="name" name="name" class="form-control" id="name" placeholder="Nama kamu">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="sr-only">Pesan</label>
                            <textarea name="pesan" id="pesan" cols="30" rows="10" class="form-control" placeholder="Pesan kamu..."></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <button type="submit" class="btn btn-default btn-block">Kirim ke Whatsapp</button>
                    </div>
                </form>

                <?php
                if ($_POST) {
                    $nama   = $_POST['name'];
                    $pesan  = $_POST['pesan'];

                    echo '<script>window.open("https://api.whatsapp.com/send?phone=6282360945244&text=' . $pesan . ', dari ' . $nama . '", "_blank")</script>';
                }
                ?>
            </div>
        </div>
    </div>
</div>