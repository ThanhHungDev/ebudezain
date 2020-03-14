<!-- Modal HTML embedded directly into document -->
<div id="js-modal-register" class="modal model-wrapper-form-control">
    <div class="modal-header">
        đăng kí
    </div>
    <div class="modal-body">
        <div class="js-alert-register-error alert alert-warning" style="display: none;">
            <strong>đăng kí thất bại.</strong>
            <p></p>
        </div>
        <div class="input-group">
            <span class="svg-icon"> {% include "genneral/svg/email.svg" %} </span>
            <input name="email" type="text" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="Địa Chỉ Email" />
        </div>
        <div class="input-group">
            <span class="svg-icon"> {% include "genneral/svg/password.svg" %} </span>
            <input name="password" type="password" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="Mật Khẩu" />
        </div>
        <div class="input-group">
            <span class="svg-icon"> {% include "genneral/svg/users.svg" %} </span>
            <input name="name" type="text" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="tên" />
        </div>
        <div class="link-page clear">
            <a href="#js-modal-login" class="link-login">Đăng Nhập</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0)" class="d-inline-block btn bg-red text-white" rel="modal:close">hủy</a>
        <a id="js-btn-register-submit-form" href="javascript:void(0)" class="d-inline-block btn bg-primary-color-dark text-white">đăng kí</a>
    </div>
    <div class="js-progress-wrap animated fadeIn clear" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>