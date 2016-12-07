<!--==============================Հետադարձ կապ================================-->

<style>
    #headerLogo {
        color: #cf4968;
    }

    .index6_address {
        color: #cf4968; !important;
    }
    #futterSrong {
        color: #cf4968;!important;
    }
    .socials a {
        background-color:  #cf4968; !important;
    }
    .index6_button {
        background-color:  #cf4968; !important;
        margin-bottom: 10px;
    }
</style>
<script>
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});
    })

</script>
<div class="main">
    <!--==============================Հետադարձ կապContent=================================-->

    <div class="container_12">
        <div class="grid_4">
            <h3 class="index6_address">Contact Us</h3>
            <div class="map">
                <address>
                    <dl>
                        <dd><span>Tel:</span>+374 93 555 982</dd>
                        <dd><span>Tel:</span>+374 91 552 152</dd>

                        <dd>Email: <a href="" class="col1">mail@demolink.org</a></dd>
                    </dl>
                </address>

            </div>
        </div>
        <div class="grid_8">
            <h3 class="index6_address">Contact form submitted</h3>
            <form id="form">
                <div class="success_wrapper">
                    <div class="success-message ">Contact form submitted</div>
                </div>
                <label class="name">
                    <input type="text" placeholder="Name:" data-constraints="@Required "/>
                    <span class="empty-message">*Տողը պարտադիր պետք է լրացվի.</span>

                </label>
                <label class="email">
                    <input type="text" placeholder="Email:" data-constraints="@Required @Email"/>
                    <span class="empty-message">*Տողը պարտադիր պետք է լրացվի:</span>
                    <span class="error-message">*սխալ ֆորմատ:</span>
                </label>
                <label class="phone">
                    <input type="text" placeholder="Tel:" data-constraints="@Required @JustNumbers"/>
                    <span class="empty-message">*Տողը պարտադիր պետք է լրացվի</span>
                    <span class="error-message">*սխալ ֆորմատ</span>
                </label>
                <label class="message">
                        <textarea placeholder="letter:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                    <span class="empty-message">*Տողը պարտադիր պետք է լրացվի</span>
                    <span class="error-message">*Նամակաը շատ կարճ է:</span>
                </label>
                <div>
                    <div class="clear"></div>
                    <div class="btns">
                        <a href="#"  data-type="submit" class="btn index6_button">Send</a>
                        <a href="#" data-type="reset" class="btn index6_button">clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

