<section class="min-vh-100 d-flex justify-content-center align-items-center bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form class="mb-5">
          <h2 class="text-white mb-4">Post Content</h2>
          <div class="form-group">
        <input class="form-control py-4" type="text" placeholder="Post heading" />
        <div class="invalid-feedback">Heading required</div>
        <div class="invalid-feedback">Heading is not valid</div>
    </div>
    <div class="form-group">
        <input class="form-control py-4" type="text" placeholder="Post subheading" />
        <div class="invalid-feedback">Subheading required</div>
        <div class="invalid-feedback">Subheading is not valid</div>
    </div>
    <div class="form-group">
        <input class="form-control py-4" type="text" placeholder="Post background image (enter a URL)" />
        <div class="form-text text-white-50">Use an image URL 
        </div>
        <div class="invalid-feedback">Background image required</div>
        <div class="invalid-feedback">Background image is not valid</div>
    </div>
    <div class="form-group">
        <textarea class="form-control py-3"></textarea>
        <div class="form-text text-white-50"><fa-icon class="mr-1"></fa-icon>Markdown
            supported</div>
        <div class="invalid-feedback">Body content required</div>
        <div class="invalid-feedback">Body content is not valid</div>
    </div>
          <div class="form-group d-flex align-items-center justify-content-between">
            <button class="btn btn-primary" type="submit">Create Post</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
