<?php
    for( $i = 0; $i < count($this->siteData['Cards']); $i++){
        if( $i % 2 == 0 ){
            ?>
<div class="row slide-me-in-secound">
        <div class="col-lg-7 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3><?php echo $this->siteData['Cards'][$i]['Title'];?></h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p> <?php echo $this->siteData['Cards'][$i]['Body'];?> </p> 
                            <div class="collapse" id="<?php echo $i ?>">
                                    <div class="card card-body">
                                        <?php echo $this->siteData['Cards'][$i]['BodyMore'];?> 
                                    </div>
                            </div>
                            <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#<?php echo $i ?>" aria-expanded="false" aria-controls="collapseExample">
                              <?php echo $this->siteData['Cards'][$i]['Button'];?>
                            </button>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <img src="<?php echo URL . $this->siteData['Cards'][$i]['Image'];?>" alt="image" class="fit-to-div img-rounded">
        </div>
    </div>

<?php  }
        else{ ?>
  <div class="row slide-me-in-third padding-top-50">
           <div class="col-lg-5 col-md-6 col-sm-12 hide-on-med-screens">
                <img src="<?php echo URL . $this->siteData['Cards'][$i]['Image'];?>" alt="image" class="fit-to-div img-rounded">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo $this->siteData['Cards'][$i]['Title'];?></h3>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p> <?php echo $this->siteData['Cards'][$i]['Body'];?></p>
                                <div class="collapse" id="<?php echo $i ?>">
                                        <div class="card card-body">
                                        <?php echo $this->siteData['Cards'][$i]['BodyMore'];?>
                                        </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#<?php echo $i ?>" aria-expanded="false" aria-controls="collapseExample">
                                    <?php echo $this->siteData['Cards'][$i]['Button'];?>
                                </button>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div hidden class="col-lg-5 col-md-6 col-sm-12 show-on-med-screens">
                    <img src="<?php echo URL . $this->siteData['Cards'][$i]['Image'];?>" alt="image" class="fit-to-div img-rounded">
                </div>
        </div>
<?php  }
    }
?>