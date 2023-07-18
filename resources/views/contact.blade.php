<?php ?> @include('header');
<!-- <main id="main"> -->
<section id="middle-content" class="middle-content">
    <div class="container-fluid con-fluid1" data-aos="fade-up">
        <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12">
                <br><br>
                <center>
                    <h2 class="underline-small">{{__('contact.pageText.title')}}</h2>
                </center>
                <div class="content pt-5 ">

                    <div class="row mb-5">
                        <div class="col-lg-12 text-center">
                            <label><b>{{__('contact.pageText.phoneNumber')}}</b></label>
                        </div>
                        <div class="col-lg-12 text-center">
                            <label><b>{{__('contact.pageText.email')}}</b></label>
                        </div>
                    </div>

                    <div class="scroll">
                        <div class="table-responsive">
                            <table class="rwd-table ">
                                <thead>
                                    <th>{{__('contact.pageText.serialNumber')}}</th>
                                    <th>{{__('contact.pageText.post')}}</th>
                                    <th></th>
                                    <th></th>
                                    <th>{{__('contact.pageText.officeName')}}</th>
                                    <th>{{__('contact.pageText.officeContact')}}</th>
                                </thead>
                                <tbody>
                                    @foreach ($array['personnelContact'] as $region)
                                    <tr>
                                        <td colspan="6" class="text-center"><b>{{$region['area']}}</b></td>
                                    </tr>
                                    @foreach($region['rows'] as $rows)
                                    <tr>
                                        <td>{{$rows[0]}}</td>
                                        <td>{{$rows[1]}}</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{$rows[2]}}</td>
                                        <td>{{$rows[3]}}</td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br><br>
                    <div class="scroll">
                        <div class="table-responsive">
                            <table class="rwd-table ">
                                <thead>
                                    <th>{{__('contact.pageText.serialNumber')}}</th>
                                    <th>{{__('contact.pageText.district')}}</th>
                                    <th>{{__('contact.pageText.unitAddress')}}</th>
                                </thead>
                                <tbody>
                                    @foreach($array['officeAddress'] as $address)
                                    <tr>
                                        <td>{{$address[0]}}</td>
                                        <td>{{$address[1]}} </td>
                                        <td>{{$address[2]}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-12 px-0 pt-5">
          <center><h3><h3>संपूर्ण महाराष्ट्रातील कार्यालये</h3></h3>
          <img src="/img/map/map.png" class="img-fluid" style=" width:100vw;  height:80vh;"></center>
        </div> -->
        </div>
    </div>
</section>
<!-- </main> -->

@include('footer');