<!-- Modal HTML embedded directly into document -->
<div id="js-modal-login" class="modal model-wrapper-form-control">
    <div class="modal-header">
        đăng nhập
    </div>
    <div class="modal-body">
        <div class="js-alert-register-success alert alert-success" style="display: none;">
            <strong>đăng kí thành công.</strong>
            <p>Hãy login để sử dụng web tốt hơn!</p>
        </div>
        <div class="js-alert-login-error alert alert-warning" style="display: none;">
            <strong>đăng nhập thất bại.</strong>
            <p></p>
        </div>
        <div class="input-group">
            <span class="svg-icon"> {% include "genneral/svg/email.svg" %} </span>
            <input name="email" ref="email" type="text" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="Địa Chỉ Email" />
        </div>
        <div class="input-group">
            <span class="svg-icon"> {% include "genneral/svg/password.svg" %} </span>
            <input name="password" ref="password" type="password" autoCorrect="off" autoCapitalize="none" class="input-control" placeholder="Mật Khẩu" />
        </div>
        <div class="link-page clear">
            <a href="#js-modal-register" class="link-register">Đăng kí</a>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="d-inline-block btn bg-red text-white" rel="modal:close">hủy</a>
        <a id="js-btn-login-submit-form" href="javascript:void(0)" class="d-inline-block btn bg-primary-color-dark text-white">đăng nhập</a>
    </div>
    <div class="js-progress-wrap animated fadeIn clear" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>