<style>
    /* Overlay */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 1;
    }

    /* Modal */
    .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background-color: white;
        padding: 20px;
        z-index: 2;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        /* Animation */
        transition: transform 0.3s ease;
    }

    /* Show the modal */
    .modal.show {
        display: block;
        transform: translate(-50%, -50%) scale(1);
        /* Scale up to normal size */
    }

    /* Show the overlay */
    .modal-overlay.show {
        display: block;
    }
</style>

<!-- Modal Structure (hidden by default) -->
<div id="roomDetailsModal" class="modal" style="display:none;">
    <div class="modal-content">
        <h4 id="roomName">Room Name</h4>
        <p id="roomPax">Number of Pax: </p>
        <p id="roomDimension">Dimensions: </p>
    </div>
    <div class="modal-footer">
        <button onclick="closeModal()">Close</button>
    </div>
</div>
