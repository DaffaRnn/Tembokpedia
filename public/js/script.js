const confirmModal = document.getElementById('confirmModal');
    const confirmBtn = document.getElementById('confirmRegisterBtn');

    confirmModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const programId = button.getAttribute('data-program-id');

        // Set link href sesuai ID program
        confirmBtn.href = `/program/register/${programId}`;
    });