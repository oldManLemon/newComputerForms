//Horseshit! You have to initailize each one of the select options. 

    //Below initialises ALL drop downs.
    //WorkChoices
    var elem = document.querySelector('select');
    var instance = M.FormSelect.init(elem);

    //AutoCad Year Choices
    var autoCadSelector = document.getElementById('autoCadSelector');
    var instanceOfAutoCad = M.FormSelect.init(autoCadSelector);

    //Revit Year Choices
    var revitSelector = document.getElementById('revitSelector');
    var instanceOfrevit = M.FormSelect.init(revitSelector);
/* 
    //Text Area for Admin
    var textAreaAdmin = document.getElementById('otherAdmin');
    var initializeTextAreaAdmin = M.textareaAutoResize.init(textAreaAdmin);

    //Text Area Struct
    var textAreaStruct = document.getElementById('otherStructural');
    var initializeTextAreaStruct = M.textareaAutoResize.init(textAreaStruct);
   
    //Text Area Civil 
    var textAreaCivil = document.getElementById('otherCivil');
    var initializeTextAreaCivil = M.textareaAutoResize.init(textAreaCivil); */