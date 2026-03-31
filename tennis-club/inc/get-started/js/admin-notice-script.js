
// Creta Testimonial Showcase plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const tennis_club_button = document.getElementById('install-activate-button');

    if (!tennis_club_button) return;

    tennis_club_button.addEventListener('click', function (e) {
        e.preventDefault();

        const tennis_club_redirectUrl = tennis_club_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const tennis_club_checkData = new FormData();
        tennis_club_checkData.append('action', 'check_creta_testimonial_activation');

        fetch(installcretatestimonialData.ajaxurl, {
            method: 'POST',
            body: tennis_club_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = tennis_club_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                tennis_club_button.textContent = 'Nevigate Getstart';

                const tennis_club_installData = new FormData();
                tennis_club_installData.append('action', 'install_and_activate_creta_testimonial_plugin');
                tennis_club_installData.append('_ajax_nonce', installcretatestimonialData.nonce);

                fetch(installcretatestimonialData.ajaxurl, {
                    method: 'POST',
                    body: tennis_club_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = tennis_club_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        tennis_club_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    tennis_club_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
