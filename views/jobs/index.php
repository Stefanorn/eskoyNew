<h2 hidden class="show-on-small-screens text-center">Jobbsoknader</h2>
<div class="container padding-top-50">
  <div class="row slide-me-in-secound">
    <div class="col-lg-7 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h3>Job Applications</h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p> Eskøy is always looking for new and experienced fishermen to work at our long-liners, we  review all applications so dont be afraid to contact us and send in your application here.
            </p>
            <button type="button" class="btn btn-danger show-appliaction" data-target=".bd-example-modal-lg">Send in application here</button>
          </blockquote>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-12">
      <img src="Public/images/madur-ad-vinna.jpg" alt="Man working" class="fit-to-div img-rounded">
    </div>
  </div>
  <div class="modal bd-example-modal-lg job-application fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">

      <div class="modal-content">

        <div class="modal-header">
          <h3 class="modal-title">Jobbsøknader
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> 
        </h3>
        </div>
        <div class="modal-body">
          <form action="jobs/sendApplication" enctype="multipart/form-data" method="POST">
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="name">Dit Navn : </label>
              </div>
              <div class="col-lg-10 col-md-9 col-sm-12">
                <input for="name" type="text" name="name" class="fit-to-div">
              </div>

            </div>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="email">Din E-Post : </label>
              </div>
              <div class="col-lg-10 col-md-9 col-sm-12">
                <input for="email" type="email" name="email" class="fit-to-div">
              </div>

            </div>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="phoneNumber">Din Telephone : </label>
              </div>
              <div class="col-lg-10 col-md-9 col-sm-12">
                <input for="phoneNumber" type="text" name="phoneNumber" class="fit-to-div">
              </div>

            </div>
            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="aboutYourSelf">Noe om deg : </label>
              </div>
              <div class="col-lg-10 col-md-9 col-sm-12">
                <textarea for="aboutYourSelf" type="text" name="aboutYourSelf" class="fit-to-div" rows="10"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="attachment">Din CV : </label>
              </div>
              <div class="col-lg-10 col-md-9 col-sm-12">
                <input for="attachment" name="attachment" type="file" />
                <p class="text-left">Vi aksepterer bare filer på .pdf .odt .rtf .txt .docx format</p>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" value="Submit" class="btn btn-primary ">
        </div>
        </form>
      </div>
    </div>
</div>