<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"
        type="text/css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <link href="css/confirm.css" type="text/css" rel="stylesheet">

    <script src="js/confirm.js"></script>
</head>

<body>
<div class="outer">
    <div class="ep">
    <img src="images/logo.png" style="float:left" alt="logo" height="100px">
    <h1 style="color:#504BF6">Kgisl Institute of Technology</h1>
        <h1 style="color:#504BF6">Student Result and Performance Analysis</h1>
        <hr></hr>
    
    <h1 style="margin:auto;text-align:center;color:#504BF6">Student Marks Performance</h1>
    </div>
    </div>
    
    <div class="chat_icon">

        <i class="fa fa-comments" aria-hidden="true"></i>
    </div>
    <div class="chat_box">
        <div class="conv-form-wrapper">
        <form id="chatbot-form" method="POST" action="grade.php">
    <select name="category"  data-conv-question="Hello! I'm a chatbot created for easy interaction ">
        <option value="over all Arrear">Arrear Count</option>
        <option value="Grade">Grade</option>
    </select>
    <div data-conv-fork="category">
        <div data-conv-case="over all Arrear">
            <input type="text" name="register_number" data-conv-question="Please enter your register number:">
            <select data-conv-question="Thank you for Using Chatbot!"></select>
        </div>
        <div data-conv-case="Grade" >
            <input type="text" name="register_number" data-conv-question="Please enter your register number:">
            <input type="text" data-callback="storeState" name="subject_code" data-conv-question="Please enter the subject code:">
            <select name="category1" data-conv-question="Check Another Grade">
	                                    <option value="yes" data-callback="rollback">Yes</option>
	                                    <option value="no" data-callback="restore">No</option>
	                                </select>
                                    <div data-conv-fork="category1">
                                    
                                    <div data-conv-case="no">
                                        <select data-conv-question="Thank you for Using Chatbot!"></select></div></div>
    
        </div>
        <div data-conv-case="DataBase">
            <input type="text" name="register_number" data-conv-question="Please enter your register number:">
        </div>
    </div>
    <button class="conv-submit-btn" type="submit">Submit</button>
</form>
    </div>
    
    </div>
    <script>
		
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}
		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
</body>

</html>