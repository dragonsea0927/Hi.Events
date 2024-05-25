import {useMutation} from "@tanstack/react-query";
import {IdParam} from "../types.ts";
import {userClient} from "../api/user.client.ts";

export const useResendEmailConfirmation = () => {
    return useMutation(
        ({userId}: {
            userId: IdParam,
        }) => userClient.resendConfirmation(userId),
    )
}