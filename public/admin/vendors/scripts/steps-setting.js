$(".tab-wizard").steps({
    headerTag: "h5",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: "Submit",
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
        $(".steps .current").prevAll().addClass("disabled");
    },
    onFinished: function (event, currentIndex) {
        // Soumettre le formulaire lorsque le processus est terminé
        $(".tab-wizard").submit();
    },
});

$(".tab-wizard2").steps({
    headerTag: "h5",
    bodyTag: "section",
    transitionEffect: "fade",
    titleTemplate:
        '<span class="step">#index#</span> <span class="info">#title#</span>',
    labels: {
        finish: "Submit",
        next: "Suivant",
        previous: "Précédent",
    },
    onStepChanged: function (event, currentIndex, priorIndex) {
        $(".steps .current").prevAll().addClass("disabled");
    },
    onFinished: function (event, currentIndex) {
        $("#success-modal-btn").trigger("click");
    },
});
