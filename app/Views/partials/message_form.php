
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary display-3" id="staticBackdropLabel"> Sent Us Message </h5>
        <button type="button" class="btn-close badge badge-danger" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('sent_message')?>" method="post" >
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="people" class="form-label">Phone Number </label>
                <input type="number" class="form-control" id="people" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Write Your Message</label>
                <textarea name="message"  id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-lg btn-primary"><i class="bi bi-envelope-arrow-up"></i> Sent Message </button>
              <a  class="btn btn-danger " data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Exit</a>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>