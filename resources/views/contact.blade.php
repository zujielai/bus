@extends('layout')
@section('content')
<div class="col-sm-12">
<form  action="{{route('addFeedback')}}" method="post" enctype="multipart/form-data"><br> @csrf
    <div class="row">              
    <div class="col-sm-6">
        <h2>Contact Us</h2>
        Name: <input name="name" type="text" class="form-control">
        Phone: <input name="phoneNo" type="text" class="form-control">
        Email: <input name="email" type="email" class="form-control">
                 
        Feedback: <textarea name="enquiry" class="form-control" id="" cols="" rows="3"></textarea><br>
        <button class="btn btn-info" onClick="return confirm('Are you sure want to submit?')">Submit</button><br><br>
    </div>
    <div class="col-sm-3">
    <h2>MY Location</h2>
    <h3>Johor</h3>
        <div style="margin-top: 5px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.388106476252!2d103.67892554177345!3d1.5341737109888838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da73c109632e0b%3A0x74cda51bf210c304!2sSouthern%20University%20College!5e0!3m2!1sen!2smy!4v1649392475162!5m2!1sen!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
    </div>
    <div class="col-sm-3">
        <h2>&nbsp;</h2>
    <h3>Perak</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2035621.9801628755!2d99.93561419333136!3d4.800220679885074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3034b5fc2f44401d%3A0xa2d9d6f05cfe5ad2!2z6Zy56Zuz!5e0!3m2!1szh-CN!2smy!4v1672743703825!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
    </div>
    </div>

    <div class="row"> 
       <div class="col-sm-3">
        <h3>Kedah</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2032294.6159991713!2d99.25338929271365!3d5.8096347392714796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304976135f4045a1%3A0x6ce483110aab4ea4!2z5ZCJ5omT!5e0!3m2!1szh-CN!2smy!4v1672743882510!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Perlis</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253711.72177780178!2d100.1050024570939!3d6.490547410537707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304c7916f2d4bdf9%3A0x675ec9fc75fcfb6f!2z546755KD5biC!5e0!3m2!1szh-CN!2smy!4v1672743930329!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Kelantan</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1016869.7258068741!2d100.85061225086935!3d5.394503619527374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b5d97264fa1a59%3A0x6ec97bbb4a9fbcf0!2z5ZCJ5YWw5Li5!5e0!3m2!1szh-CN!2smy!4v1672743959952!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Selangor</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1016869.7258068741!2d100.85061225086935!3d5.394503619527374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4252cdeb045f%3A0x26e1bee1215dfbb9!2z6Zuq5YWw6I6q!5e0!3m2!1szh-CN!2smy!4v1672743989616!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
    </div>

    <div class="row"> 
       <div class="col-sm-3">
        <h3>Melaka</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63788.42385021058!2d102.21648428562266!3d2.237464299091269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1ee278e8c65dd%3A0x32a7281769e016a!2z6ams5YWt55Sy!5e0!3m2!1szh-CN!2smy!4v1672744014344!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Negeri Sembilan</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510069.34042492113!2d101.6277663461104!3d2.8403666136502137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cde76f651dda2b%3A0x2b4e482fbc170249!2z5qOu576O5YWw!5e0!3m2!1szh-CN!2smy!4v1672744039705!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Pahang</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1019354.9518525931!2d102.21742668936315!3d3.6205351490374666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c504e2889d108b%3A0x8b39eb767e5ba846!2z5b2t5Lqo!5e0!3m2!1szh-CN!2smy!4v1672744067168!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Penang</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63553.15612605487!2d100.27432703476535!3d5.40596434649108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac397ad2b7bd5%3A0x239ae45978a9b934!2z5qef5Z-O!5e0!3m2!1szh-CN!2smy!4v1672744092695!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
    </div>

    <div class="row"> 
       <div class="col-sm-3">
        <h3>Terengganu</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1017624.5112220754!2d102.4743986094517!3d4.923643174456098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6dd7557fbd357%3A0x6a8fe5afedf2a3fe!2z55m75ZiJ5qW8!5e0!3m2!1szh-CN!2smy!4v1672744152377!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
       <div class="col-sm-3">
        <h3>Kuala Lumpur</h3>
        <div style="margin-top: 5px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127482.66722784376!2d101.61694947391018!3d3.138674968879937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49c701efeae7%3A0xf4d98e5b2f1c287d!2z5ZCJ6ZqG5Z2h!5e0!3m2!1szh-CN!2smy!4v1672744212744!5m2!1szh-CN!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
       </div>
    </div>
</div>
@endsection