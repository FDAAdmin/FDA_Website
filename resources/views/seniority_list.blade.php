<?php ?> @include('header');

<!-- <main id="main"> -->
<section id="middle-content" class="middle-content">
    <div class="container-fluid con-fluid1" data-aos="fade-up">
        <div class="row no-gutters card-shadow pr-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12">
                <br><br>
                <center>
                    <h2 class="underline-small">{{__('seniorityList.title')}} </h2>
                </center>

                <div class="content pt-5 ">

                    <div class="scroll">
                        <div class="table-responsive">
                            <table class="rwd-table ">
                                <thead>
                                    <th>{{__('seniorityList.srNo')}}</th>
                                    <th>{{__('seniorityList.listTitle')}}</th>
                                </thead>
                                <tbody>
                                @foreach ($array['links'] as $link)
                                    <tr>
                                        <td>{{__('numbers.'.$loop->index+1)}}</td>
                                        <td>
                                            <a href="$link[0]" target="_blank">{{$link[1]}}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- </main> -->

@include('footer');