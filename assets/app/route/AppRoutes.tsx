import React, { FC } from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import { LayoutRoute } from "app/route/routes/LayoutRoute";
import { IndexRoute } from "app/route/routes/IndexRoute";

export const AppRoutes: FC = () => (
    <BrowserRouter>
        <Routes>
            <Route path="/" element={<LayoutRoute />}>
                <Route index element={<IndexRoute />} />
            </Route>
        </Routes>
    </BrowserRouter>
);
