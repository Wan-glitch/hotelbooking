<div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reservation</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/submit" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form6Example1" class="form-control">
                        <label class="form-label" for="form6Example1" style="margin-left: 0px;">First name</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>
                    <div class="col">
                    <div class="form-outline">
                        <input type="text" id="form6Example2" class="form-control">
                        <label class="form-label" for="form6Example2" style="margin-left: 0px;">Last name</label>
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68px;"></div><div class="form-notch-trailing"></div></div></div>
                    </div>
                </div>

                <!-- Text input -->
                <!-- Number input -->

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example4" class="form-control">
                    <label class="form-label" for="form6Example4" style="margin-left: 0px;">Address</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 55.2px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form6Example5" class="form-control">
                    <label class="form-label" for="form6Example5" style="margin-left: 0px;">Email</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 40px;"></div><div class="form-notch-trailing"></div></div></div>

                <!-- Number input -->
                <div class="form-outline mb-4">
                    <input type="number" id="form6Example6" class="form-control">
                    <label class="form-label" for="form6Example6" style="margin-left: 0px;">Phone</label>
                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 44px;"></div><div class="form-notch-trailing"></div></div></div>

                <div class="form-outline mb-4 input-group">
                    <span class="input-group-text">Adult and Children</span>
                    <input type="number" aria-label="Adult" class="form-control" />
                    <input type="number" aria-label="Children" class="form-control" />
                  </div>




                <div class="md-form md-outline input-with-post-icon datepicker">
                    <label for="example">Check-in Date</label>
                    <input placeholder="Select check-in" type="date" id="example" class="form-control" style="margin-left: 0px;">
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 44px;"></div><div class="form-notch-trailing"></div></div>
                </div>

                <div class="md-form md-outline input-with-post-icon datepicker">
                    <label for="example">Check-out Date</label>
                    <input placeholder="Select check-in" type="date" id="example" class="form-control" style="margin-left: 0px;">
                    <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 44px;"></div><div class="form-notch-trailing"></div></div>
                </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">BOOK NOW</button>
        </div>
      </div>
    </div>
  </div>
