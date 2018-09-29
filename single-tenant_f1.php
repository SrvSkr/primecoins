<?php include 'head.php'?>
<?php include 'header.php'?>


<?php $page = "single-tenant";?>


<div class="container hero-image"><!-- Main image banner -->
    
    <div class="row jumbo fullwidth" id="<?php echo $page;?>">
      
      
    </div>
    
</div>
<div class="container-fluid page-header fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <img class="tenant-image" src="images/people/female_1.jpg">
                </div>
               <div class="col-sm-7 property_header">
                   <h2 class="page-header">Siobhán O'Leary</h2>
                   <span>IT Sepcialist, 34</span>
                </div>
            </div>
        </div>

</div>

<div class="container tenant-content">
    <div class="row">
        <div class="left-column pb15 col-sm-5">
               <ul>
                   <li><img src="images/icon_card.png"><h6>Further Information</h6><span>Smoker: No</span><span>Nationality: Irish</span><span>Languages: Irish, English, French</span><span>Hometown: Galway</span></li>
                   <li><img src="images/icon_references.png"><h6>Reference Downloads</h6><a href="content/test.pdf"><span>Work Reference</span></a><a href="content/test.pdf"><span>Landlord Reference</span></a></li>
                <li><img src="images/icon_money.png"><h6>Proof of Funding Downloads</h6><a href="content/test.pdf"><span>Bank Statement</span></a></li>
                   <li><img src="images/icon_3ppl.png"><h6>Siobhán is searching with 1 friend</h6><a href="content/test.pdf"><span>John Smith</span></a></li>
                   <li><br></li>
                   <a href="#"><small><i class="fa fa-exclamation-circle"></i>&nbsp;Report profile</small></a>
            </ul>
        </div>
        
        <div class="col-sm-7">
            <h4>Introduction</h4>
            <p class="pb15">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suscipit congue odio, id tempor enim laoreet non. Sed imperdiet sem pharetra ex ornare laoreet. In nulla nunc, iaculis vitae orci eu, pellentesque rutrum ipsum. Proin euismod interdum dictum. Sed at mi sed nulla mattis hendrerit. Nunc condimentum nibh quis odio mollis vestibulum. Duis velit nisl, scelerisque quis mollis et, scelerisque eget nisl. Sed egestas nunc at arcu facilisis, sit amet eleifend ante faucibus. Praesent in tincidunt massa.</p>
            <h4>Hobbies &amp; Interests</h4>
            <p class="pb15">
                Sed at mi sed nulla mattis hendrerit. Nunc condimentum nibh quis odio mollis vestibulum. Duis velit nisl, scelerisque quis mollis et, scelerisque eget nisl. Sed egestas nunc at arcu facilisis, sit amet eleifend ante faucibus. Praesent in tincidunt massa.
            </p>
            <div class="separator"></div>
            
            <a href="#"data-toggle="modal" data-target="#contact-modal"> <button class="pb15 amber tenbut">Contact Siobhán</button></a>
        </div>
    </div>
</div>

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>