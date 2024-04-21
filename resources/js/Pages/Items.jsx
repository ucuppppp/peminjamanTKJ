import AdminLayout from "../Layouts/AdminLayout.jsx";

export default function Items() {
    return (
        <AdminLayout>
            <h2>Items</h2>
            <div className="max-w-4xl flex flex-col gap-2">
                <div className="flex justify-between items-center py-3 px-6 bg-gray-300 rounded-md">
                    <h3>Lorem ipsum dolor sit.</h3>
                    <div>
                        Edit | Hapus
                    </div>
                </div>
                <div className="flex justify-between items-center py-3 px-6 bg-gray-300 rounded-md">
                    <h3>Lorem ipsum dolor sit.</h3>
                    <div>
                        Edit | Hapus
                    </div>
                </div>
                <div className="flex justify-between items-center py-3 px-6 bg-gray-300 rounded-md">
                    <h3>Lorem ipsum dolor sit.</h3>
                    <div>
                        Edit | Hapus
                    </div>
                </div>
                <div className="flex justify-between items-center py-3 px-6 bg-green-300 rounded-md">
                    <h3>Lorem ipsum dolor sit.</h3>
                    <div>
                        Edit | Hapus
                    </div>
                </div>
                <div className="flex justify-between items-center py-3 px-6 bg-red-300 rounded-md">
                    <h3>Lorem ipsum dolor sit.</h3>
                    <div>
                        Edit | Hapus
                    </div>
                </div>
            </div>
        </AdminLayout>
    );
}
