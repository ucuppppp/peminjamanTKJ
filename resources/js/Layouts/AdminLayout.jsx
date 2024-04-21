import { Link } from "@inertiajs/react";
import React from "react";

const AdminLayout = ({ children }) => {

    const handleLogout = async () => {
        try {
            // Kirim permintaan POST ke rute logout di server
            await axios.post('/logout');


        } catch (error) {
            // Tangani kesalahan jika terjadi
            console.error('Error logging out:', error);
        }
    }
    return (
        <>
            <header className="bg-black text-white py-8">
                <div className="container mx-auto">
                    <div className="flex justify-between items-center">
                        <h2 className="font-bold text-3xl">
                            TKJ Equipment Hub
                        </h2>
                        <nav className="flex justify-between items-center grow ml-36">
                            <div className="flex gap-6 items-center justify-start">
                                <Link href="/items">Items</Link>
                                <Link href="/dashboard">Dashboard</Link>
                            </div>

                            <button onClick={handleLogout}>Logout</button>
                        </nav>
                    </div>
                </div>
            </header>
            <main>
                <div className="container mx-auto">{children}</div>
            </main>
        </>
    );
};

export default AdminLayout;
