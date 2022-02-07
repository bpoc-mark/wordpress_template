<?php

/* Template Name: Contact Page */

get_header();?>
<?php echo do_shortcode('[contact-form-7 id="36" title="Contact form 1"]'); ?>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
    let element = document.querySelector("#company");
    const target = element;
    const checkGeneralOptions = {
        attributes: true,
        attributeFilter: ['readonly'],
        attributeOldValue: true,
    };
    let state = false;
    var observeChanges = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            setTimeout(function() {
                console.log([mutation, mutation.oldValue, mutation.type,
                    "is read only = " + mutation.target.getAttribute(
                        'readOnly'), "Im always checking"
                ]);
            }, 30);
            mutation.target.getAttribute('readOnly') != null ? state = true : state;
            if (state && mutation.oldValue === null) {
                getinputValue();
            } else if (mutation.oldValue === 'readonly') {
                resetInputValue();
            }
        });
    });
    observeChanges.observe(target, checkGeneralOptions);

    getinputValue = (e) => {
        document.querySelector('.p-multiStepForm__form').classList.add("isConfirmation");
        document.querySelectorAll('.p-multiStepForm__stepList__item')[0].classList.remove("isCurrent");
        document.querySelectorAll('.p-multiStepForm__stepList__item')[1].classList.add("isCurrent");

        // GET COMPANY NAME VALUE
        let companyname = document.querySelector('input[name="company-name"]');
        let companyElem = document.createElement("p");
        let companyNode = document.createTextNode(companyname.value);
        companyname.style.display = "none";
        companyElem.appendChild(companyNode);
        companyname.parentElement.appendChild(companyElem);

        // GET NAME VALUE
        let yourname = document.querySelector('input[name="your-name"]');
        let nameElem = document.createElement("p");
        let nameNode = document.createTextNode(yourname.value);
        yourname.style.display = "none";
        nameElem.appendChild(nameNode);
        yourname.parentElement.appendChild(nameElem);

        // GET FURIGANA VALUE
        let furigana = document.querySelector('input[name="furigana"]');
        let furiganaElem = document.createElement("p");
        let furiganaNode = document.createTextNode(furigana.value);
        furigana.style.display = "none";
        furiganaElem.appendChild(furiganaNode);
        furigana.parentElement.appendChild(furiganaElem);

        // GET TEL VALUE
        let tel = document.querySelector('input[name="tel-num"]');
        let telElem = document.createElement("p");
        let telNode = document.createTextNode(tel.value);
        tel.style.display = "none";
        telElem.appendChild(telNode);
        tel.parentElement.appendChild(telElem);

        // GET EMAIL VALUE
        let email = document.querySelector('input[name="email-address"]');
        let emailElem = document.createElement("p");
        let emailNode = document.createTextNode(email.value);
        email.style.display = "none";
        emailElem.appendChild(emailNode);
        email.parentElement.appendChild(emailElem);

        // GET TEXTAREA ELEMENT VALUE
        let textValue = document.querySelector('.wpcf7-textarea');
        let textElem = document.createElement("p");
        let textNode = document.createTextNode(textValue.value);
        textValue.style.display = "none";
        textElem.appendChild(textNode);
        textValue.parentElement.appendChild(textElem);

        // GET CHECKBOX ELEMENT VALUE
        let inquiryEle = document.querySelector('.inquiry');
        let checkboxesValue = Array.from(document.querySelectorAll('input[name="inquiry[]"]'))
            .filter((checkbox) => checkbox.checked)
            .map((checkbox) => checkbox.value);
        console.log(checkboxesValue)
        let inquiryElem = document.createElement("p");
        let inquiryNode = document.createTextNode(checkboxesValue);
        inquiryEle.style.display = "none";
        inquiryElem.appendChild(inquiryNode);
        inquiryEle.parentElement.appendChild(inquiryElem);
    }

    resetInputValue = (e) => {
        document.querySelector('.p-multiStepForm__form').classList.remove("isConfirmation");
        document.querySelectorAll('.p-multiStepForm__stepList__item')[0].classList.add("isCurrent");
        document.querySelectorAll('.p-multiStepForm__stepList__item')[1].classList.remove("isCurrent");

        //  GET COMPANY NAME VALUE
        let companyname = document.querySelector('input[name="company-name"]');
        companyname.style.display = "block";
        companyname.parentElement.querySelector('p').remove();

        //  GET NAME VALUE
        let yourname = document.querySelector('input[name="your-name"]');
        yourname.style.display = "block";
        yourname.parentElement.querySelector('p').remove();

        //  GET NAME VALUE
        let furigana = document.querySelector('input[name="furigana"]');
        furigana.style.display = "block";
        furigana.parentElement.querySelector('p').remove();

        //  GET TEL VALUE
        let tel = document.querySelector('input[name="tel-num"]');
        tel.style.display = "block";
        tel.parentElement.querySelector('p').remove();

        //  GET EMAIL VALUE
        let email = document.querySelector('input[name="email-address"]');
        email.style.display = "block";
        email.parentElement.querySelector('p').remove();

        // // GET TEXTAREA ELEMENT VALUE
        let textValue = document.querySelector('.wpcf7-textarea');
        textValue.style.display = "block";
        textValue.parentElement.querySelector('p').remove();

        // // GET CHECKBOX ELEMENT VALUE
        let inquiryEle = document.querySelector('.inquiry');
        inquiryEle.style.display = "block";
        inquiryEle.parentElement.querySelector('p').remove();
    }

    privacyLink = (e) => {
        let privacy = document.querySelector('#privacy .wpcf7-list-item label .wpcf7-list-item-label');
        let privacyElem = document.createElement("a");
        privacyElem.setAttribute('href', "yourlink.htm");
        let privacyNode = document.createTextNode("プライバシーポリシー");
        privacyElem.appendChild(privacyNode);
        privacy.appendChild(privacyElem);
    }
    privacyLink();
});
</script>
<?php get_footer();?>