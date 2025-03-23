function scrollToNextStep(nextStepId) {
    var nextStep = document.getElementById(nextStepId);
    if (nextStep) {
        nextStep.scrollIntoView({ behavior: 'smooth' });
    } else {
        console.error("Element not found:", nextStepId);
    }
}