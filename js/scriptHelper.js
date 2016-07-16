// JavaScript Document
function include(scriptPath, callback){
	jQuery.ajax({
	    async:false, // กำหนด พารามิเตอร์ asynchronous ของฟังก์ชัน ajax ให้เป็น false
	    type:'GET', // ตั้งเมธอด เป็น GET
	    url:scriptPath, // กำหนดตำแหน่งสคริป (ทั้ง Local และ Remote)
	    data:null, // ไม่ต้องส่งข้อมูลใดๆออกไป (ไม่ต้องใส่ก็ได้)
	    success: callback, // Callback ที่จะทำงานหลังโหลดสคริปเสร็จ
	    dataType:'script', // กำหนดชนิดของข้อมูลเป็น script
	    error: function(xhr, textStatus, errorThrown) {
					// ถ้าเกิดข้อผิดพลาดขึ้น สามารถเรียกใช้งานตัวแปร textStatus เพื่อแสดงข้อความผิดพลาดได้ 
					// หรือใช้งานตัวแปร errorThrown ที่เป็นตัวแปร Callback เพื่อดักข้อผิดพลาดได้เช่นกัน
    	}
	});
}