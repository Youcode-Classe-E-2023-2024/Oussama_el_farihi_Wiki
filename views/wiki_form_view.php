<form class="mb-5">
    <h2 class="text-white mb-4">Post Content</h2>
    <div class="form-group">
        <input class="form-control py-4" type="text" placeholder="Post heading" />
        <div class="invalid-feedback" >Heading required</div>
        <div class="invalid-feedback" >Heading is not valid</div>
    </div>
    <div class="form-group">
        <input class="form-control py-4" type="text" placeholder="Post subheading" />
        <div class="invalid-feedback" >Subheading required</div>
        <div class="invalid-feedback" >Subheading is not valid</div>
    </div>
    <div class="form-group">
        <input class="form-control py-4" type="text" placeholder="Post background image (enter a URL)" />
        <div class="form-text text-white-50">Use an image URL (ex. https://source.unsplash.com/WLUHO9A_xik/1600x900)</div>
        <div class="invalid-feedback" >Background image required</div>
        <div class="invalid-feedback" >Background image is not valid</div>
    </div>
    <div class="form-group">
        <textarea class="form-control py-3" id="bodyInput" autosize data-cy="bodyInput" placeholder="Post body text (markdown supported)" formControlName="body" [class.is-valid]="bodyControlValid" [class.is-invalid]="bodyControlInvalid"></textarea>
        <div class="form-text text-white-50"><fa-icon class="mr-1" [icon]='["fab", "markdown"]'></fa-icon>Markdown supported</div>
        <div class="invalid-feedback" >Body content required</div>
        <div class="invalid-feedback" >Body content is not valid</div>
    </div>
    <div class="form-group d-flex align-items-center justify-content-between"><button class="btn btn-primary" type="submit" >Create Post</button><button class="btn btn-primary" type="submit">Update Post</button></div>
</form>
<h2 class="text-white mb-4">Post Preview</h2>
<markdown class="p-4 mb-4" ></markdown><button class="btn btn-danger" >Delete Post</button>
<div class="modal-header">
        <h5 class="modal-title">Confirm Delete</h5>
        <button class="close" type="button" ><span aria-hidden="true">×</span></button>
    </div>
    <div class="modal-body small"><div class="text-danger">Warning: Deleting a post is permamnent. This action cannot be undone.</div></div>
    <div class="modal-footer"><button class="btn btn-danger" type="button" >Delete Post</button><button class="btn btn-secondary" type="button" >Cancel</button></div>