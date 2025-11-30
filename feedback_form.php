<h5 class="card-title">Feedback Form</h5>

<form class="row g-3">
  <div class="col-md-12">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingFullName" placeholder="Full Name">
      <label for="floatingFullName">Full Name</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingFeedbackEmail" placeholder="Email Address">
      <label for="floatingFeedbackEmail">Email Address</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingSubject" placeholder="Subject">
      <label for="floatingSubject">Subject</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating">
      <select class="form-select" id="floatingCategory" aria-label="Feedback Category">
        <option selected disabled>Choose a category</option>
        <option value="1">Website</option>
        <option value="2">Customer Service</option>
        <option value="3">Product Quality</option>
        <option value="4">Other</option>
      </select>
      <label for="floatingCategory">Category</label>
    </div>
  </div>

  <div class="col-12">
    <div class="form-floating">
      <textarea class="form-control" placeholder="Your Feedback" id="floatingMessage" style="height: 120px;"></textarea>
      <label for="floatingMessage">Your Feedback</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingRating" placeholder="Rating (1-5)">
      <label for="floatingRating">Rating (1–5)</label>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingDate" placeholder="Date">
      <label for="floatingDate">Date</label>
    </div>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-success">Send Feedback</button>
    <button type="reset" class="btn btn-outline-secondary">Clear</button>
  </div>
</form>
