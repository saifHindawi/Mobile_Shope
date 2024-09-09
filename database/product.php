<?php
    // Class Product تستخدم لاسترجاع بيانات المنتجات من قاعدة البيانات
    class Product {
        // المتغير $db سيتم تخزين كائن اتصال قاعدة البيانات فيه
        public $db = null;

        public function __construct(DBController $db) {
            // التحقق إذا كان اتصال قاعدة البيانات غير مُعَرَّف (null) أو غير صالح
            if (!isset($db->con)) return null; // إذا كان الاتصال غير موجود، فإنه يتم الخروج من الدالة
            $this->db = $db; // تعيين الاتصال بقاعدة البيانات للكائن الحالي
        }

        public function getData($table = 'product') {
            $result = $this->db->con->query("SELECT * FROM {$table}");

            // تعريف مصفوفة فارغة لتخزين نتائج الاستعلام
            $resultArray = array();

            // حلقة while لاستخراج كل صف من نتيجة الاستعلام وتحويله إلى مصفوفة مترابطة
            // يتم استخدام mysqli_fetch_array لاسترجاع البيانات كمصفوفة مرتبطة بمفاتيح الأعمدة
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                // إضافة كل صف من النتائج إلى المصفوفة $resultArray
                $resultArray[] = $item;
            }

            //MYSQLI_ASSOCلجعل كل البيانات المحضرة في مصفوفة واحدة

            // في هذه المرحلة، المصفوفة $resultArray تحتوي على جميع البيانات المسترجعة من الجدول
            // يمكنك إرجاع المصفوفة أو استخدامها لاحقًا في الكود حسب الحاجة
            return $resultArray; // إرجاع مصفوفة النتائج
        }
    }
?>
