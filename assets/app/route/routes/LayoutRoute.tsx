import React, { FC } from "react";
import { Outlet } from "react-router-dom";

export const LayoutRoute: FC = () => (
    <div>
        <Outlet />
    </div>
);
