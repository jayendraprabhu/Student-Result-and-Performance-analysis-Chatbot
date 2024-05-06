$(document).ready(function () {
    $('.chat_icon').click(function (event) {
        $('.chat_box').toggleClass('active');
    });
    $('.conv-form-wrapper').convform({ selectInputStyle: 'disable' });

    $('.conv-form-wrapper').submit(function (event) {
        event.preventDefault();

        var registerNumber = $('input[name="register_number"]').val();
        var subjectCode = $('input[name="subject_code"]').val();

        // Remove any existing grade result message
        $('.grade-result').remove();

        // Create a new message container for the grade result
        var resultContainer = $('<div class="grade-result" style="background: #efefef;color: #6f6f6f;float: left;border-top-left-radius: 1px;bottom:30px;    padding: 10px 15px 8px;border-radius:30%;"></div>');

        // Append the message container to the chat box
        $('.chat_box .conv-form-wrapper').append(resultContainer);

        // Scroll to the bottom of the chat box
        $('.chat_box').scrollTop($('.chat_box')[0].scrollHeight);

        var category = $('select[name="category"]').val();

        if (category === "Grade") {
            // Make the AJAX request to get the grade result
            $.ajax({
                url: 'grade.php',
                type: 'POST',
                data: {
                    category:$('#chatbot-form').serialize(), 
                register_number: registerNumber,
                subject_code: subjectCode
                },
                dataType: 'json',
                success: function (response) {
                    if (response === "1") {
                        resultContainer.text("No records found for the provided subject code.");
                    } 
                    if (response === "") {
                        resultContainer.text('No records found for the provided register number');
                    } else {
                        resultContainer.text('     Grade: ' + response);
                    }
    
                    // Scroll to the bottom of the chat box
                    $('.chat_box').scrollTop($('.chat_box')[0].scrollHeight);
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            
            });
        } 
        else if (category === "over all Arrear") {
            // Make the AJAX request to get the arrear count
            $.ajax({
                url: 'arrearcount.php',
                type: 'POST',
                data: {
                    category:$('#chatbot-form').serialize(), 
                register_number: registerNumber
                },
                dataType: 'json',
                success: function (response) {
                    if (response === "") {
                        resultContainer.text('No records found for the provided register number');
                    } else{
                        resultContainer.text('     Total Arrear: ' + response);}
                   
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }


        
    });
});
