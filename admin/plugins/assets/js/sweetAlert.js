$(document).ready(() => {
	function deleteItem(buttonClass, deleteUrl) {
		$(buttonClass).on("click", function () {
			const itemId = $(this).data("id");

			Swal.fire({
				title: "آیا مطمئن هستید؟",
				text: "این عمل قابل بازگشت نیست!",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#d33",
				cancelButtonColor: "#3085d6",
				confirmButtonText: "بله، حذف شود!",
				cancelButtonText: "لغو",
			}).then((result) => {
				if (result.isConfirmed) {
					// ارسال درخواست حذف
					window.location.href = `${deleteUrl}?id=${itemId}`;
				}
			});
		});
	}


	deleteItem(".delete-btn", "blog_delete.php");


	deleteItem(".delete-blogCat", "blogCategori_delete.php");

	deleteItem(".delete-Auth", "authors_delete.php");
});
