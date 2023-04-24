//DOM elements
const DOMstrings = {
    stepsbuttonClass: 'page-form',
    stepsbuttons: document.querySelectorAll(`.page-form`),
    stepsBar: document.querySelector('.page-progress'),
    stepsForm: document.querySelector('.page-form-form'),
    stepsFormTextareas: document.querySelectorAll('.page-textarea'),
    stepFormPanelClass: 'page-panel',
    stepFormPanels: document.querySelectorAll('.page-panel'),
    stepPrevbuttonClass: 'js-button-prev',
    stepNextbuttonClass: 'js-button-next'
  };
  
  //remove class from a set of items
  const removeClasses = (elemSet, className) => {
    
    elemSet.forEach(elem => {
      
      elem.classList.remove(className);
      
    });
    
  };
  
  //return exect parent node of the element
  const findParent = (elem, parentClass) => {
    
    let currentNode = elem;
  
    while(! (currentNode.classList.contains(parentClass))) {
      currentNode = currentNode.parentNode;
    }
    
    return currentNode;
    
  };
  
  //get active button step number
  const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsbuttons).indexOf(elem);
  };
  
  //set all steps before clicked (and clicked too) to active
  const setActiveStep = (activeStepNum) => {
    
    //remove active state from all the state
    removeClasses(DOMstrings.stepsbuttons, 'js-active');
    
    //set picked items to active
    DOMstrings.stepsbuttons.forEach((elem, index) => {
      
      if(index <= (activeStepNum) ) {
        elem.classList.add('js-active');
      }
      
    });
  };
  
  //get active panel
  const getActivePanel = () => {
    
    let activePanel;
    
    DOMstrings.stepFormPanels.forEach(elem => {
      
      if(elem.classList.contains('js-active')) {
        
        activePanel = elem;
        
      }
      
    });
    
    return activePanel;
                                      
  };
  
  //open active panel (and close unactive panels)
  const setActivePanel = activePanelNum => {
    
    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');
    
    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
      if(index === (activePanelNum)) {
        
        elem.classList.add('js-active');
     
        setFormHeight(elem);
        
      }
    })
    
  };
  
  //set form height equal to current panel height
  const formHeight = (activePanel) => {
    
    const activePanelHeight = activePanel.offsetHeight;
    
    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
    
  };
  
  const setFormHeight = () => {
    const activePanel = getActivePanel();
  
    formHeight(activePanel);
  }
  
  //STEPS BAR CLICK FUNCTION
  DOMstrings.stepsBar.addEventListener('click', e => {
    
    //check if click target is a step button
    const eventTarget = e.target;
    
    if(!eventTarget.classList.contains(`${DOMstrings.stepsbuttonClass}`)) {
      return;
    }
    
    //get active button step number
    const activeStep = getActiveStep(eventTarget);
    
    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);
    
    //open active panel
    setActivePanel(activeStep);
  });
  
  //PREV/NEXT buttonS CLICK
  DOMstrings.stepsForm.addEventListener('click', e => {
    
    const eventTarget = e.target;
    
    //check if we clicked on `PREV` or NEXT` buttons
    if(! ( (eventTarget.classList.contains(`${DOMstrings.stepPrevbuttonClass}`)) || (eventTarget.classList.contains(`${DOMstrings.stepNextbuttonClass}`)) ) ) 
    {
      return;
    }
    
    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
    
    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
    
    //set active step and active panel onclick
    if(eventTarget.classList.contains(`${DOMstrings.stepPrevbuttonClass}`)) {
      activePanelNum--;
    
    } else {
      
      activePanelNum++;
    
    }
    
    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);
    
  });
  
  //SETTING PROPER FORM HEIGHT ONLOAD
  window.addEventListener('load', setFormHeight, false);
  
  //SETTING PROPER FORM HEIGHT ONRESIZE
  window.addEventListener('resize', setFormHeight, false);
  
  //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)
  
  const setAnimationType = (newType) => {
    DOMstrings.stepFormPanels.forEach(elem => {
      elem.dataset.animation = newType;
    })
  };
  
  //selector onchange - changing animation
  const animationSelect = document.querySelector('.animationselect');
  
  animationSelect.addEventListener('change', () => {
    const newAnimationType = animationSelect.value;
    
    setAnimationType(newAnimationType);
  });