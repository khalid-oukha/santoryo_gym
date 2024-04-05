$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('input', '#search-input', function (e) {
    // e.preventDefault();

    var search = $('#search-input').val();
    console.log(search);
    $.ajax({
        url: '/search/Subscription',
        type: 'GET',
        data: {
            search: search
        },

        success: function (response) {
            console.log(response.subscriptions);
            displaySubscriptions(response.subscriptions);
        }

    });
});


function displaySubscriptions(subscriptions) {
    let subscriptionContainer = document.getElementById("subscription-container");
    subscriptionContainer.innerHTML = "";
    subscriptions.forEach(subscription => {
        let statusBadge = subscription.status === 'ended' ? 'bg-warning' : 'bg-success';
        subscriptionContainer.innerHTML += `
            <tr class="tb-tnx-item">
                <td class="tb-tnx-id">
                    <a href="#"><span>${subscription.id}</span></a>
                </td>
                <td class="tb-tnx-info">
                    <div class="tb-tnx-desc">
                        <span class="title">${subscription.user.firstname} ${subscription.user.lastname}</span>
                    </div>
                    <div class="tb-tnx-date">
                        <span class="date">${subscription.start_date}</span>
                        <span class="date">${subscription.end_date}</span>
                    </div>
                </td>
                <td class="tb-tnx-amount is-alt">
                    <div class="tb-tnx-total">
                        <span class="amount">${subscription.offer.price} DH</span>
                    </div>
                    <div class="tb-tnx-status"><span class="badge badge-dot ${statusBadge}">${subscription.status}</span></div>
                </td>
                <td class="tb-odr-action">
                    <div class="tb-odr-btns d-none d-sm-inline">
                        <a href="html/invoice-print.html" target="_blank" class="btn btn-icon btn-white btn-dim btn-sm btn-primary"><em class="icon ni ni-printer-fill"></em></a>
                    </div>
                    <a href="html/invoice-details.html" class="btn btn-pd-auto d-sm-none"><em class="icon ni ni-chevron-right"></em></a>
                </td>
            </tr>
        `;
    });
}

