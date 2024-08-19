<?php $id = uniqid(); ?>
<form id="form_<?= $id ?>" class="form form-buy" autocomplete="off">
    <input type="hidden" id="form_source" name="form_source" value="Buy Form" />
    <input type="hidden" id="integration" name="integration" value="klaviyo" />
    <div class="flex flex-col gap-[20px]">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[20px]">
            <div class="form-field w-full">
                <label for="first_name" class="block">First Name</label>
                <input id="first_name" type="text" name="first_name" placeholder="Enter First Name" />
            </div>
            <div class="form-field w-full">
                <label for="last_name" class="block">Last Name</label>
                <input id="last_name" type="text" name="last_name" placeholder="Enter Last Name" />
            </div>
        </div>
        <div class="form-field">
            <label for="address" class="block">Address</label>
            <input id="address" type="text" name="address" placeholder="Enter Address" />
        </div>
        <div class="form-field">
            <label for="phone" class="block">Phone Number</label>
            <input id="phone" type="text" name="phone" placeholder="Enter Phone Number" />
        </div>
        <div class="form-field">
            <label for="email" class="block">Email Address</label>
            <input id="email" type="email" name="email" placeholder="Enter Email Address" />
        </div>
        <div class="form-button">
            <div class="flex items-center gap-[20px]">
                <button type="submit" class="button button-secondary">
                    <span>Submit</span>
                    <svg class="btn-icon arrow h-[15px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                    </svg>
                    <svg class="btn-icon loader w-[15px] h-[15px] hidden" width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                        <g fill="none" fill-rule="evenodd">
                            <g transform="translate(1 1)" stroke-width="2">
                                <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                                <path d="M36 18c0-9.94-8.06-18-18-18">
                                    <animateTransform
                                        attributeName="transform"
                                        type="rotate"
                                        from="0 18 18"
                                        to="360 18 18"
                                        dur="1s"
                                        repeatCount="indefinite"
                                    />
                                </path>
                            </g>
                        </g>
                    </svg>
                    <svg class="btn-icon success h-[15px] hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                    <svg class="btn-icon error h-[15px] hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </button>
                <div class="response text-[12px]"></div>
            </div>
        </div>
    </div>
</form>
<script>
jQuery(function($){
    // Integrate Klaviyo

    const form = $(`#form_<?= $id ?>`)

    form.on('submit', function (e) {
        e.preventDefault()

        const fields = ['first_name', 'last_name', 'address', 'phone', 'email', 'form_source', 'integration']
        const formData = new FormData()

        formData.append("action", "form_subscriber_add")
        formData.append("key", '<?= wp_create_nonce( "form_buy" . $id ) ?>')
        formData.append("form_id", '<?= $id ?>')

        for( let field of fields )
            formData.append( field, form.find(`#${field}`).val() )

        $.ajax({
            method: "GET",
            url: `/wp-admin/admin-ajax.php?${new URLSearchParams(formData).toString()}`,
            processData: false,
            contentType: 'application/json; charset=utf-8',
            mimeType: 'multipart/form-data',
            beforeSend: function () {
                hide_btn_icons()
                form.find('.btn-icon.loader').removeClass('hidden')
            },
            success: function (res) {
                res = JSON.parse(res)
                form.find('.response').html(res.message)
                hide_btn_icons()
                form.find('.btn-icon.success').removeClass('hidden')

                for( let field of fields ) {
                    if( ['form_source', 'integration'].includes(field) ) continue
                    form.find(`#${field}`).val("")
                }

                setTimeout(() => {
                    hide_btn_icons()
                    form.find('.btn-icon.arrow').removeClass('hidden')
                }, 5000)
            },
            error: function (req, status) {
                const res = JSON.parse( req.responseText )
                form.find('.response').html(res.message)

                hide_btn_icons()
                form.find('.btn-icon.error').removeClass('hidden')

                setTimeout(() => {
                    hide_btn_icons()
                    form.find('.btn-icon.arrow').removeClass('hidden')
                }, 5000)
            }
        })
    })

    function hide_btn_icons() {
        const form = $(`#form_<?= $id ?>`)
        const icons = form.find('.btn-icon')

        icons.each(function () {
            $(this).addClass('hidden')
        })
    }
});
</script>