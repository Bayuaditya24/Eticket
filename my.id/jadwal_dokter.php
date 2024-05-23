<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>RSU Ganesha</title>
</head>

<body class="bg-body-tertiary">
    <div class="container text-center py-5">
        <div class="card">
            <div class="justify-content-center">
                <div class="logo mt-2 mb-3">
                    <img src="picture/rsuganesha.png" style="width: 160px; height:150px; border-radius:50%;" alt="">
                </div>
                <h5 class="text-secondary text-center mt-3 mb-5">Jadwal Praktek Dokter</h5>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalkandunganToggle" style="width: 200px;">
                            Poli Kandungan
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalanakToggle" style="width: 200px;">
                            Poli Anak
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalonkoToggle" style="width: 200px;">
                            Poli Bedah Onkologi
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModaltulangToggle" style="width: 200px;">
                            Poli Bedah Tulang
                        </button>
                    </div>
                </div>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalurologiToggle" style="width: 200px;">
                            Poli Bedah Urologi
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModaldigestifToggle" style="width: 200px;">
                            Poli Bedah Digestif
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalbedahumumToggle" style="width: 200px;">
                            Poli Bedah Umum
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalsarafToggle" style="width: 200px;">
                            Poli Saraf
                        </button>
                    </div>
                </div>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalthtToggle" style="width: 200px;">
                            Poli THT
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalrehabToggle" style="width: 200px;">
                            Rehabilitasi Medik
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalplastikToggle" style="width: 200px;">
                            Poli Bedah Plastik
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalmataToggle" style="width: 200px;">
                            Poli Mata
                        </button>
                    </div>
                </div>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalradiologiToggle" style="width: 200px;">
                            Radiologi
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalkulitToggle" style="width: 200px;">
                            Poli Kulit & Kelamin
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModaldalamToggle" style="width: 200px;">
                            Poli Penyakit Dalam
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModaljantungToggle" style="width: 200px;">
                            Poli Jantung
                        </button>
                    </div>
                </div>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalpatologiToggle" style="width: 200px;">
                            Patologi Anatomi
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalpsikiatriToggle" style="width: 200px;">
                            Poli Psikiatri
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalpsikologToggle" style="width: 200px;">
                            Psikolog Klinis
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalgigiToggle" style="width: 200px;">
                            Poli Gigi
                        </button>
                    </div>
                </div>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalgeriatriToggle" style="width: 200px;">
                            Poli Geriatri
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalparuToggle" style="width: 200px;">
                            Poli Paru
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalakupunturToggle" style="width: 200px;">
                            Poli Akupunktur
                        </button>
                    </div>
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalanastesiToggle" style="width: 200px;">
                            Poli Anastesi
                        </button>
                    </div>
                </div>
                <div class="row gap-4 mb-4">
                    <div class="col-sm">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalbedahkepalaleherToggle" style="width: 200px;">
                            Poli Bedah Kepala Leher
                        </button>
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #Poli Kandungan -->
    <div class="modal fade" id="ModalkandunganToggle" aria-hidden="true" aria-labelledby="ModalkandunganToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalkandunganToggleLabel">Poli Kandungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-3">
                                <img src="picture_dr/dr. IGN. Darmaja, Sp. OG (Spesialis Kandungan).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-header bg-white">
                                <h6 class="card-title text-center">dr. IGN. Darmaja, Sp. OG</h6>
                            </div>
                            <div class="card-body">
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu, & Jumat</td>
                                            <td>09.00 - 12.00</td>
                                        </tr>
                                        <tr>
                                            <td>Senin, Rabu, & Jumat</td>
                                            <td>18.30 - 20.30</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>10.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalkandunganToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalkandunganToggle2" aria-hidden="true" aria-labelledby="ModalkandunganToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalkandunganToggleLabel2">Poli Kandungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-3">
                                <img src="picture_dr/dr. Ni Wayan Supriany, Sp. OG (Spesialis Kandungan).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ni Wayan Supriany, Sp. OG</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>19.00 - 21.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>11.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalkandunganToggle" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalkandunganToggle3" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalkandunganToggle3" aria-hidden="true" aria-labelledby="ModalkandunganToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalkandunganToggleLabel3">Poli Kandungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-3">
                                <img src="picture_dr/dr. IGN. Nym. Yuliastina, Sp. OG (Spesialis Kandungan).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. IGN. Nym. Yuliastina, Sp. OG</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa, Kamis, & Sabtu</td>
                                            <td>13.00 - 15.00</td>
                                        </tr>
                                        <tr>
                                            <td>Minggu</td>
                                            <td>09.00 - 11.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalkandunganToggle2" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalkandunganToggle4" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalkandunganToggle4" aria-hidden="true" aria-labelledby="ModalkandunganToggleLabel4" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalkandunganToggleLabel4">Poli Kandungan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-3">
                                <img src="picture_dr/dr. I Wayan Rusdiarna Eka Putra, Sp. OG (Spesialis Kandungan).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Wayan Rusdiarna Eka Putra, Sp. OG</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>15.00 - 17.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalkandunganToggle3" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Kandungan -->

    <!-- #Poli Anak -->
    <div class="modal fade" id="ModalanakToggle" aria-hidden="true" aria-labelledby="ModalanakToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalanakToggleLabel">Poli Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. IGN. Sudiana, Sp.A (Spesialis Anak).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. IGN. Sudiana, Sp.A</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>18.30 - 21.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalanakToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalanakToggle2" aria-hidden="true" aria-labelledby="ModalanakToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalanakToggleLabel2">Poli Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondaryr" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Gusti Ayu Made Dwisri Oka Dharma Liran, Sp. A</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu</td>
                                            <td>10.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalanakToggle" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalanakToggle3" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalanakToggle3" aria-hidden="true" aria-labelledby="ModalanakToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalanakToggleLabel3">Poli Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Wayan Suradhipa, M. Biomed, Sp.A (Spesialis Anak).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Wayan Suradhipa, M. Biomed, Sp.A</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu</td>
                                            <td>15.30 - 17.30</td>
                                        </tr>
                                        <tr>
                                            <td>Minggu</td>
                                            <td>10.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalanakToggle2" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Anak -->

    <!-- #Poli Onkologi -->
    <div class="modal fade" id="ModalonkoToggle" aria-hidden="true" aria-labelledby="ModalonkoToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalonkoToggleLabel">Poli Bedah Onkologi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Wawan Tirta Yasa, Sp. B (K) Onkologi (Spesialis Bedah Onkologi).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Nyoman Wawan Tirta Yasa, Sp. B (K) Onkologi</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>17.00 - 19.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Onkologi -->

    <!-- #Poli Bedah Tulang -->
    <div class="modal fade" id="ModaltulangToggle" aria-hidden="true" aria-labelledby="ModaltulangToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaltulangToggleLabel">Poli Bedah Tulang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Pasek Budiana, Sp.OT (Spesialis Bedah Tulang).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Pasek Budiana, Sp. OT</h6>
                                </div>
                                  <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin & Kamis</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Bedah tulang -->

    <!-- #Poli Bedah urologi -->
    <div class="modal fade" id="ModalurologiToggle" aria-hidden="true" aria-labelledby="ModalurologiToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalurologiToggleLabel">Poli Bedah Urologi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Wayan Yudiana, Sp. Urologi (Spesialis Bedah Urologi).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Wayan Yudiana, Sp. Urologi (K)</h6>
                                </div>
                                  <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu, & Jumat</td>
                                            <td>15.00 - 17.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Bedah urologi -->

    <!-- #Poli Bedah digestif -->
    <div class="modal fade" id="ModaldigestifToggle" aria-hidden="true" aria-labelledby="ModaldigestifToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaldigestifToggleLabel">Poli Bedah Digestif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Made Agus Dwiantara Sueta, Sp.B-KBD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu & Jumat</td>
                                            <td>19.00 - Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Bedah digestif -->

    <!-- #Poli Bedah Umum -->
    <div class="modal fade" id="ModalbedahumumToggle" aria-hidden="true" aria-labelledby="ModalbedahumumToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalbedahumumToggleLabel">Poli Bedah Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Made Darmawan, Sp. B (Spesialis Bedah Umum).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Made Darmawan, Sp. B</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalbedahumumToggle2" aria-hidden="true" aria-labelledby="ModalbedahumumToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalbedahumumToggleLabel2">Poli Bedah Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ngakan Gede Dwija Hermawan, Sp. B (Spesialis Bedah Umum).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ngakan Gede Dwija Hermawan, Sp. B</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>17.00 - 20.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu & Jumat</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle3" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalbedahumumToggle3" aria-hidden="true" aria-labelledby="ModalbedahumumToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalbedahumumToggleLabel3">Poli Bedah Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Kadek Yudi Fajar Mahendra, Sp. B (Spesialis Bedah Umum).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Kadek Yudi Fajar Mahendra, Sp. B</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu & Jumat</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>14.00 - 17.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>11.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle2" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle4" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalbedahumumToggle4" aria-hidden="true" aria-labelledby="ModalbedahumumToggleLabel4" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalbedahumumToggleLabel4">Poli Bedah Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 23rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Luciana, M. Biomed, Sp.B(K)KL.JPG" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Luciana, M. Biomed, Sp.B(K)KL</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Kamis & Jumat</td>
                                            <td>08.00 - 10.00</td>
                                        </tr>
                                         <tr>
                                            <td>Sabtu (Sesuai Perjanjian)</td>
                                            <td>07.30 - 09.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle3" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle5" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalbedahumumToggle5" aria-hidden="true" aria-labelledby="ModalbedahumumToggleLabel5" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalbedahumumToggleLabel5">Poli Bedah Umum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Made Dwi Purnamantara, Sp.B </h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>09.00 - 13.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalbedahumumToggle4" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Bedah umum -->

    <!-- #Poli saraf -->
    <div class="modal fade" id="ModalsarafToggle" aria-hidden="true" aria-labelledby="ModalsarafToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalsarafToggleLabel">Poli Saraf</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Wayan Widyantara, M. Biomed, Sp. S (Spesialis Saraf).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Wayan Widyantara, M. Biomed, Sp. S</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu & Jumat</td>
                                            <td>20.00 - Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalsarafToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalsarafToggle2" aria-hidden="true" aria-labelledby="ModalsarafToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalsarafToggleLabel2">Poli Saraf</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ni Made Oka Suliani, M.Biomed, Sp.S (Spesialis Saraf).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ni Made Oka Suliani, M.Biomed, Sp.S</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu & Jumat</td>
                                            <td>09.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalsarafToggle" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalsarafToggle3" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalsarafToggle3" aria-hidden="true" aria-labelledby="ModalsarafToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalsarafToggleLabel3">Poli Saraf</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ida Bagus Kade Satyagraha, Sp.N (Spesialis Saraf).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ida Bagus Kade Satyagraha, Sp.N</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa, Kamis & Sabtu</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalsarafToggle2" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalsarafToggle4" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalsarafToggle4" aria-hidden="true" aria-labelledby="ModalsarafToggleLabel4" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalsarafToggleLabel4">Poli Saraf</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ni Nyoman Ayu Trisnadewi, Sp. N (Spesialis Saraf).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ni Nyoman Ayu Trisnadewi, Sp. N</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>15.00 - 17.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>10.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalsarafToggle3" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli saraf -->

    <!-- #Poli tht -->
    <div class="modal fade" id="ModalthtToggle" aria-hidden="true" aria-labelledby="ModalthtToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalthtToggleLabel">Poli THT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Made Adhy Putra Widyartha, Sp. THT-KL (Spesialis THT).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Made Adhy Putra Widyartha, Sp. THT-KL</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>09.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalthtToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalthtToggle2" aria-hidden="true" aria-labelledby="ModalthtToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalthtToggleLabel2">Poli THT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 24rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Wayan Suwandara, Sp. T.H.T.K.L. (Spesialis THT).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Wayan Suwandara, Sp. T.H.T.K.L.</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Selasa, Rabu & Jumat</td>
                                            <td>17.00 - 19.00</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>18.00 - 19.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>13.30 - 15.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalthtToggle" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModalthtToggle3" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalthtToggle3" aria-hidden="true" aria-labelledby="ModalthtToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalthtToggleLabel3">Poli THT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Putu Rinawati Jayati, M. Biomed, Sp THT (Spesialis THT).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Putu Rinawati Jayati, M. Biomed, Sp THT</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>09.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalthtToggle2" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli tht -->

    <!-- #Rehab medik -->
    <div class="modal fade" id="ModalrehabToggle" aria-hidden="true" aria-labelledby="ModalrehabToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalrehabToggleLabel">Rehabilitasi Medik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Cendy Dharmayanti, Sp. KFR (Spesialis Rehab Medik).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Cendy Dharmayanti, Sp. KFR</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>14.00 - 15.30</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>14.00 - 15.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>13.30 - 15.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalrehabToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="ModalrehabToggle2" aria-hidden="true" aria-labelledby="ModalrehabToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalrehabToggleLabel2">Rehabilitasi Medik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Nengah Bagus Surianta, Sp. KFR</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalrehabToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Rehab medik -->

    <!-- #Bedah Plastik -->
    <div class="modal fade" id="ModalplastikToggle" aria-hidden="true" aria-labelledby="ModalplastikToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalplastikToggleLabel">Poli Bedah Plastik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/Dr. dr. Frederik Zefanya Notodihardjo, Sp.BP.RE,Ph.D (Spesialis Bedah Plastik).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">Dr. dr. Frederik Zefanya Notodihardjo, Sp.BP.RE,Ph.D</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Rabu & Sabtu (Umum)</td>
                                            <td>09.00 - 12.00</td>
                                        </tr>
                                        <tr>
                                            <td>Senin & Jumat (BPJS)</td>
                                            <td>16.00 - 18.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Bedah Plastik -->

    <!-- #Poli mata -->
    <div class="modal fade" id="ModalmataToggle" aria-hidden="true" aria-labelledby="ModalmataToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalmataToggleLabel">Poli Mata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Dita Rinjani Prianti, Sp. M (Spesialis Mata).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Dita Rinjani Prianti, Sp. M</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>09.00 - 11.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalmataToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalmataToggle2" aria-hidden="true" aria-labelledby="ModalmataToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalmataToggleLabel2">Poli Mata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ni Nyoman Sunariasih, M. Biomed, Sp. M (Spesialis Mata).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ni Nyoman Sunariasih, M. Biomed, Sp. M</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Selasa & Jumat</td>
                                            <td>17.30 - 18.30</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>18.00 - 19.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>13.30 - 15.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalmataToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli mata -->

    <!-- #Radiologi -->
    <div class="modal fade" id="ModalradiologiToggle" aria-hidden="true" aria-labelledby="ModalradiologiToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalradiologiToggleLabel">Radiologi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ate Budiarti, Sp. RAD (Spesialis Radiologi).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ate Budiarti, Sp. RAD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>13.00 - Selesai</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalradiologiToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalradiologiToggle2" aria-hidden="true" aria-labelledby="ModalradiologiToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModalradiologiToggleLabel2">Radiologi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Komang Artawan, Sp. RAD (Spesialis Radiologi).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Komang Artawan, Sp. RAD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu</td>
                                            <td>17.00 - 21.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalradiologiToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Radiologi -->

    <!-- #Poli Kulit Kelamin -->
    <div class="modal fade" id="ModalkulitToggle" aria-hidden="true" aria-labelledby="ModalkulitToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalkulitToggleLabel">Poli Kulit & Kelamin</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Ni Made Dina Pranidya Ari, Sp. KK (Spesialis Kulit dan Kelamin).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Ni Made Dina Pranidya Ari, Sp. KK</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa, Kamis & Sabtu</td>
                                            <td>09.00 - 11.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalkulitToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalkulitToggle2" aria-hidden="true" aria-labelledby="ModalkulitToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModalkulitToggleLabel2">Poli Kulit & Kelamin</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Christina Putri Wijaya, Sp. KK (Spesialis Kulit dan Kelamin).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Christina Putri Wijaya, Sp. KK</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Rabu & Jumat</td>
                                            <td>17.30 - 18.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalkulitToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Kulit Kelamin -->

    <!-- #Poli penyakit dalam -->
    <div class="modal fade" id="ModaldalamToggle" aria-hidden="true" aria-labelledby="ModaldalamToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaldalamToggleLabel">Poli Penyakit Dalam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Nyoman Tri Astawa, Sp. PD (Spesialis Penyakit Dalam).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Nyoman Tri Astawa, Sp. PD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin & Jumat</td>
                                            <td>15.00 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModaldalamToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModaldalamToggle2" aria-hidden="true" aria-labelledby="ModaldalamToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaldalamToggleLabel2">Poli Penyakit Dalam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Putu Agus Lastya Eka Permana, Sp. PD (Spesialis Penyakit Dalam).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Putu Agus Lastya Eka Permana, Sp. PD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>16.00 - 18.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModaldalamToggle" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModaldalamToggle3" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModaldalamToggle3" aria-hidden="true" aria-labelledby="ModaldalamToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaldalamToggleLabel3">Poli Penyakit Dalam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 26rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Kadek Ngurah Hariawan, Sp.PD (Spesialis Penyakit Dalam).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Kadek Ngurah Hariawan, Sp.PD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Selasa, Kamis & Jumat</td>
                                            <td>11.00 - 13.00</td>
                                        </tr>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModaldalamToggle2" data-bs-toggle="modal">Kembali</button>
                    <button class="btn btn-primary" data-bs-target="#ModaldalamToggle4" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModaldalamToggle4" aria-hidden="true" aria-labelledby="ModaldalamToggleLabel4" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModaldalamToggleLabel4">Poli Penyakit Dalam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Gusti Putu Hary Sikesa, Sp. PD (Spesialis Penyakit Dalam).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Gusti Putu Hary Sikesa, Sp. PD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModaldalamToggle3" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli penyakit dalam -->

    <!-- #Poli jantung -->
    <div class="modal fade" id="ModaljantungToggle" aria-hidden="true" aria-labelledby="ModaljantungToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModaljantungToggleLabel">Poli Jantung</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Agus Wismantara, Sp.JP (Spesialis Jantung).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Putu Agus Wismantara, Sp.JP</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Jumat</td>
                                            <td>10.00 - 12.00</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModaljantungToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModaljantungToggle2" aria-hidden="true" aria-labelledby="ModaljantungToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModaljantungToggleLabel2">Poli Jantung</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Nyoman Indrawan Mataram, M. Biomed, Sp. JP (Spesialis Jantung).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Nyoman Indrawan Mataram, M. Biomed, Sp. JP</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Rabu & Jumat</td>
                                            <td>16.00 - 18.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>15.00 - 17.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModaljantungToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli jantung -->

    <!-- #Patologi anatomi -->
    <div class="modal fade" id="ModalpatologiToggle" aria-hidden="true" aria-labelledby="ModalpatologiToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalpatologiToggleLabel">Patologi Anatomi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 26rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Kadek Pramesti Dewi, Sp.PA (Spesialis Patologi Anatomi).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Kadek Pramesti Dewi, Sp.PA</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu (Sesuai Perjanjian)</td>
                                            <td>08.00 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Patologi anatomi -->

    <!-- #Poli psikiatri -->
    <div class="modal fade" id="ModalpsikiatriToggle" aria-hidden="true" aria-labelledby="ModalpsikiatriToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalpsikiatriToggleLabel">Poli Psikiatri</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Made Wedastra M. Biomed, Sp.KJ (Spesialis Jiwa).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Made Wedastra M. Biomed, Sp.KJ</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>11.00 - 14.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalpsikiatriToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalpsikiatriToggle2" aria-hidden="true" aria-labelledby="ModalpsikiatriToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModalpsikiatriToggleLabel2">Poli Psikiatri</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. I Wayan Eka Arsana, M. Biomed, Sp.KJ (Spesialis Jiwa).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. I Wayan Eka Arsana, M. Biomed, Sp.KJ</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu</td>
                                            <td>14.00 - 17.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalpsikiatriToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli psikiatri -->

    <!-- #Psikolog klinis -->
    <div class="modal fade" id="ModalpsikologToggle" aria-hidden="true" aria-labelledby="ModalpsikologToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalpsikologToggleLabel">Psikolog Klinis</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/Ni Kadek Maharani, S.Psi., M.Psi, Psikolog (Spikologi Klinis).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">Ni Kadek Maharani, S.Psi., M.Psi, Psikolog</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa, Rabu & Jumat</td>
                                            <td>09.00 - 14.30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Psikolog klinis -->

    <!-- #Poli gigi -->
    <div class="modal fade" id="ModalgigiToggle" aria-hidden="true" aria-labelledby="ModalgigiToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalgigiToggleLabel">Poli Gigi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/drg. Nyoman Suci (Gigi).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">drg. Nyoman Suci</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu</td>
                                            <td>09.00 - 12.00</td>
                                        </tr>
                                        <tr>
                                            <td>Senin & Rabu</td>
                                            <td>18.00 - 20.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalgigiToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalgigiToggle2" aria-hidden="true" aria-labelledby="ModalgigiToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModalgigiToggleLabel2">Poli Gigi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/drg. Rita Soraya, MM (Gigi).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">drg. Rita Soraya, MM</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Selasa & Kamis</td>
                                            <td>17.00 - 20.00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>13.00 - 15.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalgigiToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli gigi -->

    <!-- #Poli geriatri -->
    <div class="modal fade" id="ModalgeriatriToggle" aria-hidden="true" aria-labelledby="ModalgeriatriToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalgeriatriToggleLabel">Poli Geriatri</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Kadek Ngurah Hariawan, Sp.PD (Spesialis Penyakit Dalam).png" class="card-img-top justify-content-center" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Kadek Ngurah Hariawan, Sp.PD</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>11.00 - 13.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli geriatri -->

    <!-- #Poli Paru -->
    <div class="modal fade" id="ModalparuToggle" aria-hidden="true" aria-labelledby="ModalparuToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalparuToggleLabel">Poli Paru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Gede Sasmika Suwandi, Sp. P (Spesialis Paru).png" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Gede Sasmika Suwandi, Sp. P</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Selasa & Jumat</td>
                                            <td>17.00 - 19.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu & Kamis</td>
                                            <td>14.00 - 16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalparuToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalparuToggle2" aria-hidden="true" aria-labelledby="ModalparuToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModalparuToggleLabel2">Poli Paru</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title tex-center">dr. Pande Made Budi Wadanta, Sp.P</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>18.30 - 20.30</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>10.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalparuToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Paru -->

    <!-- #Poli Akupuntur -->
    <div class="modal fade" id="ModalakupunturToggle" aria-hidden="true" aria-labelledby="ModalakupunturToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalakupunturToggleLabel">Poli Akupuntur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">Ida Ayu Anom Rastiti, S.Kep.,MCM </h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>08.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalakupunturToggle2" data-bs-toggle="modal">Selanjutnya</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalakupunturToggle2" aria-hidden="true" aria-labelledby="ModalparuToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="ModalakupunturToggleLabel2">Poli Akupuntur</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/unknow.jpg" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">Ida Ayu Suptika Strisanti, S.Kep.,MCM </h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Minggu</td>
                                            <td>08.00 - 12.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#ModalakupunturToggle" data-bs-toggle="modal">Kembali</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Poli Akupuntur -->
    
     <!-- #Poli Anastesi -->
    <div class="modal fade" id="ModalanastesiToggle" aria-hidden="true" aria-labelledby="ModalanastesiToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalanastesiToggleLabel">Poli Anastesi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Prameita Rahmawati, S.An-TI (Anastesi).jpeg" class="card-img-top" alt="..." style="width:260px; height: 260px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Prameita Rahmawati, S.An-TI </h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin s/d Sabtu</td>
                                            <td>08.00 - 14.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
     <!-- #Poli Anastesi -->
     
      <!-- #Poli Bedah kepala Leher -->
    <div class="modal fade" id="ModalbedahkepalaleherToggle" aria-hidden="true" aria-labelledby="ModalbedahkepalaleherToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="ModalbedahkepalaleherToggleLabel">Poli Bedah Kepala Leher</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="card sm border-secondary" style="width: 22rem; border-radius:10%;">
                            <div class="row justify-content-center mt-2">
                                <img src="picture_dr/dr. Luciana, M. Biomed, Sp.B(K)KL.JPG" class="card-img-top" alt="..." style="width:250px; border-radius:10%;">
                            </div>
                            <div class="card-body">
                                <div class="card-header bg-white">
                                    <h6 class="card-title text-center">dr. Luciana, M. Biomed, Sp.B(K)KL</h6>
                                </div>
                                 <table class="table table-borderer">
                                    <tbody>
                                        <tr>
                                            <td>Senin, Selasa & Rabu</td>
                                            <td>08.00 - 10.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
     <!-- #Poli Anastesi -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>